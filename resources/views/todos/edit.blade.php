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
	{!! Form::model($list, array('route' => ['todos.update', $list->id], 'method' => 'PUT') ) !!}
		{!! Form::label('name', 'List Title') !!}
		{!! Form::text('name') !!}
		{!! Form::submit('Update', array('class' => 'button') ) !!}
	{!! Form::close() !!}
@stop