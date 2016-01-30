@extends('layouts.app')
@section('content')
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<div class="form">
		{!! Form::open() !!}
		<div class="row">
			{!! Form::label('commented_txt','Comment Text') !!}
			{!! Form::textarea("commented_txt") !!}
		</div>
		<div class="row">
			{!! Form::Submit('Create') !!}
		</div>
		{!! Form::close() !!}
	</div>
@stop