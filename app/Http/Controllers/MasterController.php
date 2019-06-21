<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Guild;

class MasterController extends Controller {

	public function index() {
		$guilds = Guild::all();
		return view('index', compact('guilds'));
	}

	public function metrics() {
		$guilds = Guild::all();
        $guildRegions = DB::table('Guilds')->select(DB::raw('guildRegion as name, count(guildRegion) as count'))->groupBy('guildRegion')->orderByRaw('count(guildRegion) DESC')->get()->toArray();

        $systemMetrics = $this->getMetricsSorted("SystemMetrics", 200);
        $discordMetrics = $this->getMetricsSorted("DiscordMetrics", 100);
        $eventMetrics = $this->getMetricsSorted("EventMetrics", 200);

        $commandLog = DB::connection('dbmetrics')->table("CommandsLog")->select(DB::raw('command, count(command) as count, avg(executionTime) as executionTime'))->groupBy('command')->get();

		return view('metrics', compact('guilds', 'guildRegions', 'systemMetrics', 'discordMetrics', 'commandLog', 'eventMetrics'));
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
