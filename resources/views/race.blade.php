<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloodbowl League</title>
    </head>
    <body>
        Liste des races
        @foreach ($races as $race)
            <li> {{ $race->name}}</li>
      
        @endforeach
    </body>
</html>
