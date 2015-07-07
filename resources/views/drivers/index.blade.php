@extends('layouts.main')
@section('content')	
	<h2>All Drivers</h2>
		@foreach ($drivers as $driver)

			<h4>{!! link_to_route('drivers.show', $driver->first_name, [$driver->id]) !!}</h4>
			<ul class="no-bullet button-group">
					<li>
						{!! link_to_route('drivers.edit', 'edit', [$driver->id], ['class' => 'tiny button']) !!}
					</li>
					<li>
						{!! Form::model($driver, array('route' => ['drivers.destroy', $driver->id], 'method' => 'DELETE') ) !!}
        						{!! Form::button('destroy', array('type' => 'submit', 'class' => 'tiny alert button delete_driver') ) !!}
							{!! Form::close() !!}
					</li>
			</ul>
		@endforeach
		{!! link_to_route('drivers.create', 'Add Driver to List', null, ['class'=> 'success button']) !!}
@stop