@extends('vista')

@section('contenido')
<div class="container">
	<h1>PROCESO {{$proceso}}</h1>
	<br>
	@if($error==1)
	<div class="alert alert-success">{{$Mensaje}}</div>
	@else
	<div class="alert alert-warning">{{$Mensaje}}</div>
	@endif
</div>
@stop