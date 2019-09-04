@extends('layout/hero')

@section('title')

@section('hero')
    <div id="hero" class="full-height">
        <div class="hero-body">
            <div class="container justify-center">
                <img class="card-icon rounded-circle" src="https://cdn.discordapp.com/icons/368094427089993729/148a5182c01fa848be9f8835cf015e63.png" alt="WXV1a28gKERpc2NvcmQgQm90KQ==">
                <h1>Yuuko</h1>
                <span id="tag-line">Currently serving <code>{{ number_format(count($guilds)) }}</code> guilds and counting!
            </div>
        </div>
    </div>
@endsection
