@extends('layout/master')

@section('title', 'Yuuko -> Metrics')

@section('content')
    <div class="container">
        <div class="text-center bg-dark p-1"> <span class="h2-font">{{ $systemMetrics[0][0]->uptime }}ms</span></div>
        <canvas id="GuildRegions" height="100"></canvas>
        <canvas id="MemoryUsage" height="100"></canvas>
        <canvas id="TotalCommandExecutions" height="100"></canvas>
        <canvas id="AverageExecutionTime" height="100"></canvas>
        <canvas id="TotalUsers" height="100"></canvas>
        <canvas id="TotalGuilds" height="100"></canvas>
        <canvas id="TotalChannels" height="100"></canvas>
        <canvas id="TotalRoles" height="100"></canvas>
        <canvas id="TotalEmotes" height="100"></canvas>
        <canvas id="Ping" height="100"></canvas>
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
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($systemMetrics[0] as $system)
                        '{{ $system->memoryUsed/1e+6 }}',
                    @endforeach
                ]
            }, {
                label: 'Shard #1',
                backgroundColor: 'rgba(100, 0, 0, 0.7)',
                data: [
                    @foreach ($systemMetrics[1] as $system)
                        '{{ $system->memoryUsed/1e+6 }}',
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
        type: 'bar',
        data: {
            labels: [
                @foreach ($commandLog as $command)
                    '{{ $command->command }}',
                @endforeach
            ],

            datasets: [{
                label: 'Total Command Executions',
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
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
                    text: 'Total Command Executions',
                    fontColor: '#cccccc'
            },
            legend: {
                    display: false
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('AverageExecutionTime').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach ($commandLog as $command)
                    '{{ $command->command }}',
                @endforeach
            ],

            datasets: [{
                label: 'Average Execution Time (ms)',
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($commandLog as $command)
                        '{{ $command->executionTime }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    text: 'Average Execution Time (ms)',
                    fontColor: '#cccccc'
            },
            legend: {
                    display: false
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('TotalUsers').getContext('2d');
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
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[0] as $discord)
                        '{{ $discord->userCount }}',
                    @endforeach
                ]
            }, {
                label: 'Shard #1',
                backgroundColor: 'rgba(100, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[1] as $discord)
                        '{{ $discord->userCount }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    text: 'Total Users',
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
                }],
                yAxes: [{
                    stacked: true,
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
    var ctx = document.getElementById('TotalGuilds').getContext('2d');
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
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[0] as $discord)
                        '{{ $discord->guildCount }}',
                    @endforeach
                ]
            }, {
                label: 'Shard #1',
                backgroundColor: 'rgba(100, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[1] as $discord)
                        '{{ $discord->guildCount }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    text: 'Total Guilds',
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
                }],
                yAxes: [{
                    stacked: true,
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
    var ctx = document.getElementById('TotalChannels').getContext('2d');
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
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[0] as $discord)
                        '{{ $discord->channelCount }}',
                    @endforeach
                ]
            }, {
                label: 'Shard #1',
                backgroundColor: 'rgba(100, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[1] as $discord)
                        '{{ $discord->channelCount }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    text: 'Total Channels',
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
                }],
                yAxes: [{
                    stacked: true,
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
    var ctx = document.getElementById('TotalRoles').getContext('2d');
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
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[0] as $discord)
                        '{{ $discord->roleCount }}',
                    @endforeach
                ]
            }, {
                label: 'Shard #1',
                backgroundColor: 'rgba(100, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[1] as $discord)
                        '{{ $discord->roleCount }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    text: 'Total Roles',
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
                }],
                yAxes: [{
                    stacked: true,
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
    var ctx = document.getElementById('TotalEmotes').getContext('2d');
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
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[0] as $discord)
                        '{{ $discord->emoteCount }}',
                    @endforeach
                ]
            }, {
                label: 'Shard #1',
                backgroundColor: 'rgba(100, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[1] as $discord)
                        '{{ $discord->emoteCount }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    text: 'Total Emotes',
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
                }],
                yAxes: [{
                    stacked: true,
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
                backgroundColor: 'rgba(150, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[0] as $discord)
                        '{{ $discord->ping }}',
                    @endforeach
                ]
            }, {
                label: 'Shard #1',
                backgroundColor: 'rgba(100, 0, 0, 0.7)',
                data: [
                    @foreach ($discordMetrics[1] as $discord)
                        '{{ $discord->ping }}',
                    @endforeach
                ]
            }]
        },

        options: {
            title: {
                    display: true,
                    text: 'Ping',
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


