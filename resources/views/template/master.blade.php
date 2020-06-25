<!DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords"
              content="Gambling, Bet, Lucky, Free Btc,
                       Free Crypto, Dice, Crash">
        <meta name="viewport"
              content="width=device-width, user-scalable=no,
                       initial-scale=1.0, maximum-scale=1.0,
                       minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MrRo6ot</title>
        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container-flueid"> <!-- this tag is a content body -->
            @include('template.navbar')
            <main class="container-flueid">
                <div class="d-flex flex-row">
                    @include('template.aside')
                    <div id="content" class="container col-8" style="background-color: #141516;">
                        @yield('content')
                    </div>
                    @include('template.sidebarRight')
                </div>
            </main>
        </div>
    </body>
</html>
