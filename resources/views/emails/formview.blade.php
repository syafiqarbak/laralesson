@extends('layouts.app')
    @section('content')
    <h1>Test Email</h1>
    {{ Form::open(['action' => 'ContactController@store', 'method'=> 'POST', 'enctype' => 'multipart/form-data']) }}
        <div class="form-group">
            {{Form::label('title', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control','placeholder' => 'email'])}}
        </div>
        <div class="form-group">
            {{Form::label('title', 'Message')}}
            {{Form::textarea('message', '', ['class' => 'form-control','placeholder' => 'message'])}}
        </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{ Form::close() }} 
    @endsection