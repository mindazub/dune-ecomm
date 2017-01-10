<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
   public function index()
    {
        $authors = Author::all();

        $books = Book::paginate(9);

        $categories = Category::orderBy('name', 'asc')
                ->get(); 

        // dd($categories);

        return view('shop.index2', [
            'books'=> $books,
            'authors' => $authors,
            'categories' => $categories
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

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        // dd($book);
        
        return view('shop.edit', compact('book'));
    }

    public function update()
    {
        dd($request->all());
    }


}
