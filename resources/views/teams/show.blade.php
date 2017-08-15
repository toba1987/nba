@extends('layouts.master')
    @section('content')

        <h2>{{ $team->name }}</h2>
       
            <p>{{ $team->email }}</p>
			<p>{{ $team->address }}</p>
			<p>{{ $team->city }}</p>     

			@foreach($team->players as $player)
        	<li>
            	 <p><a href='/players/{{ $player->id }}'>{{ $player-> first_name }}</a></p>
        	</li>
   			@endforeach

        @endsection
