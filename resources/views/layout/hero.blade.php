<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Yuuko')</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
    @yield('hero')

    <!-- particles.js container -->
    <div id="particles-js"></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS("particles-js", {"particles":{"number":{"value":100,"density":{"enable":false,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":2,"direction":"top","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
    </script>

    <div class="w-100 shadow justify-center top-stick">
        <div class="container">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a class="nav-link" href="/">Yuuko</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/commands"><i class="fa fa-terminal" aria-hidden="true"></i> Commands</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tutorials"><i class="fa fa-chalkboard-teacher" aria-hidden="true"></i> Tutorials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/servers"><i class="fa fa-server" aria-hidden="true"></i> Servers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://discordapp.com/oauth2/authorize?client_id=420682957007880223&permissions=8&scope=bot"><i class="fa fa-link" aria-hidden="true"></i> Invite</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/metrics"><i class="fa fa-chart-bar" aria-hidden="true"></i> Metrics</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://discord.gg/VsM25fN"><i class="fab fa-discord" aria-hidden="true"></i> Support</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener" href="https://github.com/Yuuko-oh"><i class="fa fa-code-branch" aria-hidden="true"></i> Source</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
