@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @if( $user)
            @if( $user->admin == 1 )
            <p>Logged in as <strong style="color: red;">Admin</strong>: <strong>{{ $user->name }}</strong></p>
            @else
            <p>You are logged in as <strong></strong>!</p>
            @endif
        @else
            <p>You are NOT logged in.</p>
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
