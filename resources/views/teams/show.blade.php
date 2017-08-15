<!doctype html>
<html>
    <head>
    <title></title>
    </head>
    <body>
        <h2>{{ $team->name }}</h2>
       
            <p><a href='teams/{{ $team->id }}'>{{ $team->email }}</a></p>
            <p>{{ $team->email }}</p>
			<p>{{ $team->address }}</p>
			<p>{{ $team->city }}</p>     

			@foreach($team->players as $player)
        	<li>
            	 <p><a href='/players/{{ $player->id }}'>{{ $player-> first_name }}</a></p>
        	</li>
   			@endforeach
    </body>
</html>
