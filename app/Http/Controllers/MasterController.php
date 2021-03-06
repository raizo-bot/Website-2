<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Guild;

class MasterController extends Controller {

	public function index() {
		$guilds = Guild::all();
        $guildMembers = DB::table('GuildData')->select(DB::raw('sum(guildMembers) as members'))->first();
        $guildRegions = DB::table('GuildData')->select(DB::raw('count(guildRegion) as regions'))->groupBy('guildRegion')->get();
		return view('index', compact('guilds', 'guildData', 'guildMembers', 'guildRegions'));
	}

	public function servers() {
	    $guilds = Guild::all();
        $guildData = DB::table('GuildData')->get();
        return view('servers', compact('guilds',  'guildData'));
    }

	public function commands() {
        $guilds = Guild::all();
        $commands = DB::connection('dbmeta')->table('Commands')->orderBy('commandName')->get();
        return view('commands', compact('guilds',  'commands'));
    }

	public function metrics() {
		$guilds = Guild::all();
        $guildRegions = DB::table('GuildData')->select(DB::raw('guildRegion as name, count(guildRegion) as count'))->groupBy('guildRegion')->orderByRaw('count(guildRegion) DESC')->get()->toArray();
        $systemMetrics = $this->getMetricsSorted("SystemMetrics", 100);
        $discordMetrics = $this->getMetricsSorted("DiscordMetrics", 100);
        $eventMetrics = $this->getMetricsSorted("EventMetrics", 200);
        $cacheMetrics = DB::connection('dbmetrics')->table('CacheMetrics')->select(DB::raw('*'))->limit(100)->orderByDesc("dateInserted")->get()->reverse();
        $audioMetrics = DB::connection('dbmetrics')->table('AudioMetrics')->select(DB::raw('*'))->limit(100)->orderByDesc("dateInserted")->get()->reverse();
        $commandLog = DB::connection('dbmetrics')->table("CommandsLog")->select(DB::raw('command, count(command) as count, avg(executionTime) as executionTime'))->groupBy('command')->orderByRaw('count(command) DESC')->get();

		return view('metrics', compact('guilds', 'guildRegions', 'systemMetrics', 'discordMetrics', 'commandLog', 'eventMetrics', 'audioMetrics', 'cacheMetrics'));
	}

	public function tutorials() {
		$guilds = Guild::all();
		return view('tutorials', compact('guilds'));
	}

    private function getMetricsSorted($table, $limit) {
        $mixedArray = DB::connection('dbmetrics')->table($table)->select('*')->limit($limit)->orderBy('dateInserted', 'DESC')->get()->reverse();
        $shard0 = Array();
        $shard1 = Array();

        foreach($mixedArray as $record) {
            if($record->shardId == 0) {
                array_push($shard0, $record);
            } else {
                array_push($shard1, $record);
            }
        }

        $mixedArray = Array();
        array_push($mixedArray, $shard0, $shard1);

        return $mixedArray;
    }

}
