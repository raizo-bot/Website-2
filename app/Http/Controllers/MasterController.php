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
        $guildRegions = DB::table('Guilds')->select('guildRegion as name', DB::raw('count(guildRegion) as count'))->groupBy('guildRegion')->orderByRaw('count(guildRegion) DESC')->get()->toArray();

        $systemMetrics = DB::connection('dbmetrics')->table("SystemMetrics")->select('*')->where('shardId', '=', '0')->limit(150)->orderBy('dateInserted', 'DESC')->get()->reverse();
        $systemMetrics2 = DB::connection('dbmetrics')->table("SystemMetrics")->select('*')->where('shardId', '=', '1')->limit(150)->orderBy('dateInserted', 'DESC')->get()->reverse();

		return view('metrics', compact('guilds', 'guildRegions', 'systemMetrics', 'systemMetrics2'));
	}

	public function tutorials() {
		$guilds = Guild::all();
		return view('tutorials', compact('guilds'));
	}

}
