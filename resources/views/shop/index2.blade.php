@extends('layouts.app')

@section('content')


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
                    <p class="lead">Shop Name</p>

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


            <div class="col-md-9">



<!-- Page Content -->
    


@foreach ($books->chunk(3) as $chunk)
    <div class="row">
        @foreach ($chunk as $book)
            <!-- <div class="col-xs-4">{{ $book->title }}</div> -->
            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <span>{{ $book->category->name }}</span>
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <div class="pull-right">                         
                                    <h4 class="pull-right" style="font-size: 29px; font-weight: bold-italic;">EUR&nbsp&nbsp{{ $book->price }}</h4>
                                </div>
                                <h4><a href="/shop/book/{{ $book->id }}">{{ $book->title }}</a>
                                </h4>
                                <h5>{{ $book->author->name }} </h5>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <!-- PIRKTI -->
                            <div>
                                <button class="btn btn-lg btn-success">
                                Buy
                                <i class="fa fa-lg fa-shopping-cart" aria-hidden="true" style="position: auto;"></i>
                                </button>
                            </div>
                            <!-- END PIRKTI -->
                            <p></p>
                            <p></p>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
@endforeach

{{  $books->render() }}

          

@endsection