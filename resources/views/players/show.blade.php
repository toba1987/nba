<!doctype html>
<html>
    <head>
    <title></title>
    </head>
    <body>
        <h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
       
          
            <p>{{ $player->email }}</p>

            <p><a href='/teams/{{ $player->team_id }}'>{{ $player->team->name }}</a></p>
			
    </body>
</html>