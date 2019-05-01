<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.4 Cloudways Contact US Form Example</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>Contact US Form</h1>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactus.store']) !!}

<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
{!! Form::label('nama:') !!}
{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder'=>'Enter nama']) !!}
<span class="text-danger">{{ $errors->first('nama') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('telepon') ? 'has-error' : '' }}">
{!! Form::label('telepon:') !!}
{!! Form::text('telepon', old('telepon'), ['class'=>'form-control', 'placeholder'=>'Enter telepon']) !!}
<span class="text-danger">{{ $errors->first('telepon') }}</span>
</div>

<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
{!! Form::label('subject:') !!}
{!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter subject']) !!}
<span class="text-danger">{{ $errors->first('subject') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>

{!! Form::close() !!}

</div>

</body>
</html>