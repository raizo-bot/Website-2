<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Yuuko')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="jumbotron text-center'">
        <h2>Yuuko</h2>
        <div class="cover"></div>
    </div>

        <div class="container inherit light">
            <ul class="nav navbar-fixed-top nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.yuuko.info">Commands</a>
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

    @yield('content')
</body>

</html>
