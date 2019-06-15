<?php


namespace App\Http\Controllers;


class MasterController extends Controller {

	public function index() {
		$guilds = \App\Guild::all()->map->name;
		return view('index', compact('guilds'));
	}

	public function metrics() {
		$guilds = \App\Guild::all()->map->name;
		return view('metrics', compact('guilds'));
	}

	public function tutorials() {
		$guilds = \App\Guild::all()->map->name;
		return view('tutorials', compact('guilds'));
	}

}