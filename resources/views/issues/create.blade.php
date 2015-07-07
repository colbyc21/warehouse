@extends('layouts.main')
@section('content')

<h1>Add Issue</h1>

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
{!! Form::open(array('route' => ['drivers.issues.store', $driver->id]) ) !!}
       @include('issues.partials._form')
    {!! Form::close() !!}
 
@stop