@extends('layout/master')

@section('title', 'Yuuko -> Metrics')

@section('content')
    <div class="container">
        <h2>Coming soon! :)</h2>
        <canvas id="GuildRegions" height="100"></canvas>
        <canvas id="MemoryUsage" height="100"></canvas>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
    var ctx = document.getElementById('GuildRegions').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
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

<script>
    var ctx2 = document.getElementById('MemoryUsage').getContext('2d');
    var chart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: [
            @foreach ($systemMetrics as $system)
                '{{ substr($system->dateInserted,11) }}',
            @endforeach
        ],

        datasets: [{
            label: 'Shard #0',
            backgroundColor: 'rgba(150, 0, 0, 0.7)',
            data: [
                @foreach ($systemMetrics as $system)
                    '{{ $system->memoryUsed/1e+6 }}',
                @endforeach
            ]
        }, {
            label: 'Shard #1',
            backgroundColor: 'rgba(100, 0, 0, 0.7)',
            data: [
                @foreach ($systemMetrics2 as $system2)
                    '{{ $system2->memoryUsed/1e+6 }}',
                @endforeach
            ]
        }]
    },

    options: {
        title: {
                display: true,
                text: 'Memory Usage (MB)',
                fontColor: '#cccccc'
        },
        legend: {
                display: true
        },
        scales: {
            xAxes: [{
                ticks: {
                    maxTicksLimit: 16
                }
            }]
        },
        elements: {
            point: {
                radius: 1
            }
        }
    }

    });
</script>
