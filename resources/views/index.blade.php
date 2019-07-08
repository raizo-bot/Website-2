@extends('layout/hero')

@section('title')

@section('hero')
    <div id="hero" class="full-height">
        <div class="hero-body">
            <div class="container justify-center">
                <h1>Yuuko</h1>
                <span id="tag-line">Currently serving <code>{{ number_format(count($guilds)) }}</code> guilds and counting!
            </div>
        </div>
    </div>
@endsection

@section('hero-nav')
    <div class="w-100 justify-center top-stick">
        <div class="container">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a class="nav-link" href="/">Yuuko</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/commands">Commands</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tutorials">Tutorials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/servers">Servers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://discordapp.com/oauth2/authorize?client_id=420682957007880223&permissions=8&scope=bot">Invite</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/metrics"><img src="{{ asset('assets/icon/chart-icon.png') }}" alt="metrics" /></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://discord.gg/VsM25fN"><img src="{{ asset('assets/icon/discord-icon.png') }}" alt="discord" /></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://github.com/Yuuko-oh"><img src="{{ asset('assets/icon/github-icon.png') }}" alt="github" /></a>
                </li>
            </ul>
        </div>
    </div>
@endsection
