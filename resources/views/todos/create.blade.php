@extends('layouts.main')
@section('content')

<h1>Create List</h1>

<!-- Present Errors -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <small class ='error'>{{ $error }}</small>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create List Form -->
	{!! Form::open(array('route' => 'todos.store') ) !!}
		{!! Form::label('title', 'List Title') !!}
		{!! Form::text('title') !!}
		{!! Form::submit('submit', array('class' => 'button') ) !!}
	{!! Form::close() !!}
@stop