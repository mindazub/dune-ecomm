@extends('layouts.app')

@section('content')

@foreach($category as @cat)

	<li>{{$cat->name }}</li>
@endforeach

@stop