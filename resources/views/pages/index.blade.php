@extends('layouts.app')

@section('content')

	{!! Form::open() !!}
		{!! Form::text( 'page_name', '', [ 'class' => '' ] ) !!}
		{!! Form::text( 'user_id', '', [ 'class' => '' ] ) !!}

		{!! Form::submit( 'Submit', [ 'class' => '' ] ) !!}
	{!! Form::close() !!}
@stop

@section('script')
<script>
// alert("hi");
</script>
@stop