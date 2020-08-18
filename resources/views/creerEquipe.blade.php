<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloodbowl League</title>
    </head>
    <body>
        <h1>creer une equipe</h1>
        <form method="POST" action="/equipe/creer">
            @csrf
            <label>nom de l'equipe</label>
            <input id="name" name="name" type="text" />
            <input type="submit"/>
        </form>
              
    </body>
</html>

