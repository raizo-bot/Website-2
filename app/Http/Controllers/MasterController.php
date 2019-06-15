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

		return view('metrics', compact('guilds', 'guildRegions'));
	}

	public function tutorials() {
		$guilds = Guild::all();
		return view('tutorials', compact('guilds'));
	}

}
