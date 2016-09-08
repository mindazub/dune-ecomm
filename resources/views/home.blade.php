@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('example.table_books')           
            @include('example.table_authors')
            @include('example.table_categories')
        </div>
    </div>
</div>
@endsection
