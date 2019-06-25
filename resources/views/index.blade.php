@extends('layout/master')

@section('title')

@section('content')

    <div class="row vote-col">
        <div class="card mb-2 m-1 bg-dark col">
            <div class="card-body">
                <h6 class="card-title text-center">discordbots.org</h6>
                <p class="card-text">The first bot list that Yuuko was added to a month after creation in 2018, with a link to their website <a href="https://discordbots.org">here</a>.</p>
                <a href="https://discordbots.org/bot/420682957007880223/vote" target="_blank" class="btn btn-primary btn-block">Vote</a>
            </div>
        </div>
        <div class="card mb-2 m-1 bg-dark col">
            <div class="card-body">
                <h6 class="card-title text-center">discordbotlist.com</h6>
                <p class="card-text">The second bot list that Yuuko was added to some time in January 2019, with a link to their website <a href="https://discordbotlist.com">here</a>.</p>
                <a href="https://discordbotlist.com/bots/420682957007880223/upvote" target="_blank" class="btn btn-primary btn-block">Vote</a>
            </div>
        </div>
        <div class="card mb-2 m-1 bg-dark col">
            <div class="card-body">
                <h6 class="card-title text-center">divinediscordbots.com</h6>
                <p class="card-text">The latest bot list that Yuuko has been added to in late January 2019, with a link to their website <a href="https://divinediscordbots.com">here</a>.</p>
                <a href="https://divinediscordbots.com/bot/420682957007880223/vote" target="_blank" class="btn btn-primary btn-block">Vote</a>
            </div>
        </div>
    </div>

    <div class="guilds d-flex">
        @foreach($guilds as $guild)
            @if($guild->inviteLink != null)
            <div class="guild-col d-flex justify-content-between">
                <div class="card">
                    <div class="card-img-top" style="background-image: url("{{ $guild->guildSplash }}")>
                        <img class="card-icon rounded-circle" src="{{ $guild->guildIcon }}"/>
                    </div>
                    <div class="card-body guild-body">
                        <h6 class="guild-name">{{ base64_decode($guild->guildName) }}</h6>
                        <div class="guild-controls">
                            <span class="btn guild-member-count float-left"><img src="/assets/icon/group-icon.png"\> {{ number_format($guild->memberCount) }}</span>
                            <a href="{{ $guild->inviteLink }}" target="_blank"><span class="btn btn-primary float-right">Join</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>

@endsection
