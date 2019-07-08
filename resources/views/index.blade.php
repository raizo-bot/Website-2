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
