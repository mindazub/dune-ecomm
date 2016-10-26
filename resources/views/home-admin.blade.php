@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
	    <H1>ADMIN AREA</H1>
    </div>
    	<div class="col-md-10 col-md-offset-1">
	    	@if(\Auth::user()-> admin == 1 )
			<p>Logged in as <strong style="color: red;">Admin</strong>: <strong>{{ Auth::user()->name }}</strong></p>
			@else
			<p>You are logged in as <strong>{{ Auth::user()->name }}</strong>!</p>
			@endif
		</div>
        <div class="col-md-10 col-md-offset-1">
            @include('example.table_books')           
            @include('example.table_authors')
            @include('example.table_categories')
        </div>
    </div>
</div>
@endsection
