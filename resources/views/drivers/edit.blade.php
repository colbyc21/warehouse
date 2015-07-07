@extends('layouts.main')
@section('content')

<h1>Update Driver</h1>

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
	{!! Form::model($driver, array('route' => ['drivers.update', $driver->id], 'method' => 'PUT') ) !!}
		@include('drivers.partials._form')
	{!! Form::close() !!}
@stop