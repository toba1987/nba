<!doctype html>
<html>
    <head>
    <title></title>
    </head>
    <body>
        <h2>Timovi u NBA</h2>
        @foreach($teams as $team)
            <p><a href='teams/{{ $team->id }}'>{{ $team->name }}</a></p>
        
        @endforeach
    </body>
</html>
