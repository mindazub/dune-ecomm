<?php

namespace App\Http\Controllers;


use App\Book;
use App\Author;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        $books = Book::all();

        $categories = Category::all();

        // if(\Auth::check())
        $user = \Auth::user();
        // return "no user";
        // dd($user);

        return view('home', [
            'books'=> $books,
            'authors' => $authors,
            'categories' => $categories,
            'user' => $user ]);
    }
    public function store($request)
    {
        // dd($request);

        // $this->validate($request, [
        //     'title' => 'required',
        //     'name' => 'required',
        //     'surname' => 'required',
        //     'price' => 'required',
        //     'your_price' => 'required',
        //     'isbn' => 'required',
        //     ]);
        $book = \Book::create(['title' => $faker->sentence, 'author_id' => \Auth::user()->id,'isbn' => $faker->number(10, 5)]);

        $author = \Author::create(['name' => $faker->name, 'surname' => $faker->surname, 'email' => $faker->email]);
        dd($author);

        // $book = Book::create([
        //     'title' => $request->title,
        //     'author_id' => $author->id,
        //     'isbn' => $request->isbn,
        //     'price' => $request->price,
        //     'your_price' => $request->your_price,
        //     ]);
    }

    public function books()
    {
        $books = Book::all();

        return view('books', compact('books'));
    }

    public function showVideoProducts(Category $category)
    {
        // $cat_prod = Category::with('products')->toArray();

        // dd($cat_prod);

        // dd($category);

        $category = Category::all();

        return view('shop.category')->with('category',$category);
    }
}