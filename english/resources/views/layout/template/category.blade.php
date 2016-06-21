@extends('layout.template.master')
@section('title','Category')
@section('sidebar')
	<h1>Xin chao!</h1>
@stop
@section('noidung')
	@foreach ($category as $element)
		{{ $element->id }}
		{{ $element->name }}
		<br>
	@endforeach
@stop