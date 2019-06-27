<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Yuuko')</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="/assets/favicon.png">
    <meta name="theme-color" content="#212121">
    <meta name="description" content="The official website for Discord's Yuuko bot."/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142468955-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-142468955-1');
    </script>
</head>

<body>

    <!---->
    <div id="hero">
        <div class="container justify-center">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a class="nav-link" href="/">Yuuko</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/commands">Commands</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tutorials">Tutorials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://discordapp.com/oauth2/authorize?client_id=420682957007880223&permissions=8&scope=bot">Invite</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/metrics"><img src="{{ asset('assets/icon/chart-icon.png') }}" alt="metrics" /></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://discord.gg/VsM25fN"><img src="{{ asset('assets/icon/discord-icon.png') }}" alt="discord" /></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://github.com/Yuuko-oh"><img src="{{ asset('assets/icon/github-icon.png') }}" alt="github" /></a>
                </li>
            </ul>

            <h1>Yuuko</h1>
            <span id="tag-line">Serving <code>{{ number_format(count($guilds)) }}</code> guilds and counting!
        </div>
    </div>

    <!---->

    <br>

    <div class="container">
        @yield('content')

        <div class="ad-container">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- banner-ad -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5795566065164666"
                 data-ad-slot="6106139623"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>

    @yield('scripts')
</body>

</html>
