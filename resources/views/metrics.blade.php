@extends('layout/master')

@section('title', 'Yuuko / Metrics')

@section('content')
    <div class="card bg-dark mb-4">
        <h4 class="card-header">Uptime (Hours)</h4>
        <div class="card-body dimmed-text">
            {{ number_format($systemMetrics[0][0]->uptime/3.6e+6, 2) }} ± 10 Seconds
        </div>
    </div>

    <div class="card bg-dark mb-4">
        <h4 class="card-header">Memory Usage (Megabytes)</h4>
        <div class="card-body dimmed-text">
            <canvas id="MemoryUsage" height="100"></canvas>
        </div>
    </div>

    <div class="card bg-dark mb-4">
        <h4 class="card-header">Total Command Executions (Current Session)</h4>
        <div class="card-body dimmed-text">
            <canvas id="TotalCommandExecutions" height="200"></canvas>
        </div>
    </div>

    <div class="card bg-dark mb-4">
        <h4 class="card-header">Guild Region Distribution</h4>
        <div class="card-body dimmed-text">
            <canvas id="GuildRegions" height="100"></canvas>
        </div>
    </div>

    <div class="card bg-dark mb-4">
        <h4 class="card-header">Latency (Milliseconds)</h4>
        <div class="card-body dimmed-text">
            <canvas id="Ping" height="100"></canvas>
        </div>
    </div>
@endsection

@section('scripts')
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
                backgroundColor: 'rgba(150, 0, 0, 0.5)',
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
                    fontColor: '#cccccc'
            },
            legend: {
                    display: false
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('MemoryUsage').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                @foreach ($systemMetrics[0] as $system)
                    '{{ substr($system->dateInserted,11) }}',
                @endforeach
            ],

            datasets: [{
                label: 'Shard #0',
                backgroundColor: 'rgba(150, 0, 0, 0.5)',
                data: [
                    @foreach ($systemMetrics[0] as $system)
                        '{{ $system->memoryUsed/1e+6 }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    fontColor: '#cccccc'
            },
            legend: {
                    display: true
            },
            scales: {
                xAxes: [{
                    ticks: {
                        maxTicksLimit: 8
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

<script>
    var ctx = document.getElementById('TotalCommandExecutions').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                @foreach ($commandLog as $command)
                    '{{ $command->command }}',
                @endforeach
            ],

            datasets: [{
                label: 'Total Command Executions',
                backgroundColor: 'rgba(150, 0, 0, 0.5)',
                data: [
                    @foreach ($commandLog as $command)
                        '{{ $command->count }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    fontColor: '#cccccc'
            },
            legend: {
                    display: false
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('Ping').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                @foreach ($discordMetrics[0] as $discord)
                    '{{ substr($discord->dateInserted,11) }}',
                @endforeach
            ],

            datasets: [{
                label: 'Shard #0',
                backgroundColor: 'rgba(150, 0, 0, 0.5)',
                data: [
                    @foreach ($discordMetrics[0] as $discord)
                        '{{ $discord->ping }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    fontColor: '#cccccc'
            },
            legend: {
                    display: true
            },
            scales: {
                xAxes: [{
                    ticks: {
                        maxTicksLimit: 8
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
@endsection
