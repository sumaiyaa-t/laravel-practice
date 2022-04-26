<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Book;

//Route::get('/',function(){
//    return view('User.user_view');
//});
//
////-------Insert
//Route::get('/insert',function(){
//   // DB::insert('insert into books (title) values (?)',['dd']);
//
//    Book:: create([
//        'title' => 'ihschj'
//    ]);
//
//});
//
////------Select
//Route::get('/select',function(){
//   // $books= DB::select('select * from books');
//    $books= Book::all();
//     foreach ($books as $book){
//         echo $book -> title;
//     }
//   // return $books;
//});
//
////-----update
//Route::get('/update',function(){
//   //$books = DB::update("update books set title='HSGchj' where id = 1");
//    $books= Book::where('id','4')->update([
//        'title'=>'Meem'
//    ]);
// return $books;
//});
//
////-----Delete
//Route::get('/delete',function(){
//    //$books = DB::delete("delete from books where id = 1");
//    $books= Book::where('id','4')->delete();
//    return $books;
//});

//Route::get('/', function () {
//    $c = Book::all();
//    return view('User.home',['c'=>$c]);
//    Book::create([
//        'title'=>'System Engineer'
//    ]);
//    return view('User.user_view');
//});
//
Route::get('/delete/{id}',function($id){
    $c=Book::find($id);
    $c->delete();
    return back();
})->name('delete.data');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


//-----------CRUD-----------//
Route::get('index','BookController@index')-> name('book.index');
Route::get('create','BookController@create');
Route::post('store','BookController@store')->name('book.store');
