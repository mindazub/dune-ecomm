@extends('layouts.app')

@section('content')

<!-- Page Content -->
    


@foreach ($books->chunk(3) as $chunk)
    <div class="row">
        @foreach ($chunk as $book)
            <!-- <div class="col-xs-4">{{ $book->title }}</div> -->
            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">{{ $book->price }}</h4>
                                <h4><a href="/shop/book/{{ $book->id }}">{{ $book->title }}</a>
                                </h4>
                                <h5>{{ $book->author->name }} </h5>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
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