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

        $books = Book::paginate(9);

        return view('shop.index2', [
            'books'=> $books,
            'authors' => $authors
            ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        // dd($book);
        
        return view('shop.show', compact('book'));
    }
}
