<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloodbowl League</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
        <style>
            body{
                background: #E0E0E0;
            }
            .titre{
                color: #bd2130;
                font-family: 'Nosifer', cursive;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="menu">
                <div class="title m-b-md">
                    <h1 class="display-1 titre">Bloodbowl League</h1>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                         <li class="nav-item">
                          <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/equipe/creer">Creer une equipe</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/race">Race</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
