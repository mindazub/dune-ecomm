@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<!--         <div class="col-md-10 col-md-offset-1">
 -->    
 @if( ! $categories->count() > 0 )
                <div class="col-md-3">
                    <p class="lead">Shop Name</p>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Category 1</a>
                        <a href="#" class="list-group-item">Category 2</a>
                        <a href="#" class="list-group-item">Category 3</a>
                    </div>
                </div>
            @else
                
                <div class="col-md-3">
                    <p class="lead" style="background: #d35400; color: white; font-weight: bold; padding: 15px; ">Shop Name</p>

                    <?php $selected_category = Request::has('category_id'); ?>
                    
                    <div class="list-group">
                        @foreach ($categories as $category)
                        <a href="#" class="list-group-item {{  empty($selected_category) ? 'active' : '' }}">{{ $category->name }} 
                            
                                <span class="badge pull-right">{{ $category->count() }}</span>

                            
                        </a>
                        @endforeach
                    </div>
                </div>
                

            @endif
              <!-- END OF CATEGORIES -->
        <div class="col-md-9"> 
        @if( $user)
            @if( $user->admin == 1 )
            <p>Logged in as <strong style="color: red;">Admin</strong>: <strong>{{ $user->name }}</strong></p>
            @else
            <p>You are logged in as &nbsp<strong style="color: green;">User: {{ $user->name }}</strong></p>
            @endif
        @else
            <p>You are NOT logged in.</p>
        @endif
        </div>
        
        <!-- <div class="col-md-10 col-md-offset-1"> -->
        <div class="col-md-9">
            @include('example.table_books')           
            @include('example.table_authors')
            @include('example.table_categories')
        </div>
    </div>
</div>
@endsection
