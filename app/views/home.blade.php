@extends('layouts.main')

@section('page title')
	Penny Cams
@stop

@section('content')

	<h1>Hello, world!</h1>
	<ul>
		@foreach($fruit as $f)
		<li>{{ $f }}</li>
		@endforeach
	</ul>

@stop
