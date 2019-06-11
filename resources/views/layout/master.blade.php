<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Yuuko')</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>

<body>

    <div class="jumbotron text-center'">
        <h2>Yuuko</h2>
        <span>Listening to {{ count($guilds) }} guilds and counting!
    </div>

    <div id="main-nav">
        <div class="container">
            <ul class="nav navbar-dark bg-dark">
                <li class="nav-item">
                    <a class="nav-link" href="/">Commands</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/metrics">Metrics</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tutorials">Tutorials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://github.com/Yuuko-oh">Source</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://discordapp.com/oauth2/authorize?client_id=420682957007880223&permissions=8&scope=bot">Invite</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://discord.gg/VsM25fN">Support Server</a>
                </li>
            </ul>
        </div>
    </div>

    @yield('content')
</body>

</html>
