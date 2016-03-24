<?php

namespace App\Http\Controllers;

use App\Author;
use App\BOok;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
   public function index()
    {
        $authors = Author::all();

        $books = Book::all();

        return view('shop.index', [
            'books'=> $books,
            'authors' => $authors
            ]);
    }
}
