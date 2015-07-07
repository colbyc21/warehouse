@extends('layouts.main')
@section('content')
	<div class="large-12 columns">
		<h2>{{{ $driver->first_name}}} {{{ $driver->last_name}}}</h2>
		<h3>{{{ $driver->cell_phone}}}</h3>
		@foreach ($issues as $issue)
			<h4>{{{ $issue->content}}}</h4>
		@endforeach
		<p>{!! link_to_route('drivers.index', 'back') !!}</p>
	</div>

@stop