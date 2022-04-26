<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index(){
        $books=Book::all();
        return view('crud.index',compact('books'));
    }

    public function create(){
        return view('crud.create');
    }
    public function store(){
        $inputs = \request()->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }
        Book::create($inputs);
        return back();

    }

}
