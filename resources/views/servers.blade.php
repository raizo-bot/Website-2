@extends('layout/master')

@section('title')

@section('content')
    <div class="card bg-dark mb-4">
        <h4 class="card-header">Advertise Server</h4>
        <div class="card-body dimmed-text">
            Advertising your server is a great way to boost numbers and meet new and exciting people.
            Yuuko's advertise feature allows you to do this with other people who also have Yuuko on their server.
            Best of all it's quick and easy to start, using the <code>advertise</code> command. So why not give it a try,
            more detailed instructions can be found <a href="/tutorials">here</a>!
        </div>
    </div>

    <div class="guilds d-flex">
        @foreach($guildData as $guild)
        @if($guild->inviteLink != null)
        <div class="guild-col d-flex justify-content-between">
            <div class="card">
                <div class="card-img-top" style="background-image: url("{{ $guild->guildSplash }}")>
                    <img class="card-icon rounded-circle" src="{{ $guild->guildIcon }}" alt="{{ $guild->guildName }}" />
                </div>
                <div class="card-body guild-body">
                    <h6 class="guild-name">{{ base64_decode($guild->guildName) }}</h6>
                    <div class="guild-controls">
                        <span class="btn guild-member-count float-left"><img src="/assets/icon/group-icon.png" alt="{{ $guild->guildMembers }} members" /> {{ number_format($guild->guildMembers) }}</span>
                        <a href="{{ $guild->inviteLink }}" target="_blank" rel="noopener"><span class="btn btn-primary float-right">Join</span></a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
@endsection
