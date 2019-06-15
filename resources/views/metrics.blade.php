@extends('layout/master')

@section('title', 'Yuuko -> Metrics')

@section('content')
    <div class="container">
        <h2>Coming soon! :)</h2>
        <canvas id="GuildRegions"></canvas>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
    var ctx = document.getElementById('GuildRegions').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',

    // The data for our dataset
    data: {
    labels: [
        @foreach ($guildRegions as $region)
            '{{ $region->name }}',
        @endforeach
    ],
    datasets: [{
    label: 'Region Distribution',
    backgroundColor: 'rgba(150, 0, 0, 0.7)',
    data: [
        @foreach ($guildRegions as $region)
            '{{ $region->count }}',
        @endforeach
    ]
    }]
    },

    options: {
        title: {
                display: true,
                text: 'Region Distribution',
                fontColor: '#cccccc'
        },
        legend: {
                display: false
        }
    }
    });
</script>
