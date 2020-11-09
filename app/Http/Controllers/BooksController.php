<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BooksController extends Controller
{
    public function index()
    {
    	$data = Book::all();
        $deleted= Book::onlyTrashed()->get();
        return view('books.show', compact('data','deleted'));
}
	public function create()
	{
	return view('books.create');
}
public function store(Request $request)
    {
        $data = new Book();
        $data->title = $request->title;
        $data->author = $request->author;
        $data->edition = $request->edition;
        $data->sno = $request->sno;
        $data->save();

return redirect('/books')->with('message','new record successfully saved');   
 }
    public function show($id)
    {
        $data = Book::find($id);

        return view('books.show', compact('data'));
    }  

    public function edit($id)
    {
    	$data = Book::find($id);
    	return view('books.update', compact('data'));
    } 
    public function delete($id)
    {
    	$data = Book::where('id',$id)->forceDelete();
     return redirect('/books')->with('message','record successfully deleted');
}
public function trash($id)
    {
    	$data = Book::where('id',$id)->delete();
     return redirect('/books')->with('message','record successfully deleted');
}
}