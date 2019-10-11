@extends('layout/hero')

@section('title')

@section('hero')
    <div id="hero" class="full-height">
        <div class="hero-body">
            <div class="container justify-center">
                <h1>Yuuko</h1>
                <span id="tag-line">
                    Watching <code>{{ number_format(count($guilds)) }}</code> guilds <br>
                    with <code>{{ number_format($guildMembers->members) }}</code> users, <br>
                    in <code>{{ number_format(count($guildRegions)) }}</code> regions.
            </div>
        </div>
    </div>
@endsection

