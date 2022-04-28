<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index(){
        $books=Book::paginate(1);
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

    public function edit($id){
        $books= Book::find($id);
        return view('crud.edit',compact('books'));
    }

    public function update($id){
        $books= Book::find($id);
        $inputs= \request()->validate([
            'title' => 'required'
        ]);
        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }
        else{
            $inputs['image']= $books-> image;
        }
        $books->update($inputs);
        session()->put('update','Updated successfully');
        return redirect()->route('book.index');
    }

    public function destroy($id)
    {

        $books= Book::find($id);
        $books->delete();
        return back();
    }


}
