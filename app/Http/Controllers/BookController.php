<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = \App\Book::all();
        return view('book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $book = \App\Book::query()->where('name', 'LIKE', "%{$search}%")->paginate(5);
        return view('book.index',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new \App\Book;
        $book->name = $request->get('name');
        $book->author = $request->get('author');
        $book->edition = $request->get('edition');
        $book->publisher = $request->get('publisher');
        $book->publicationdate = $request->get('publicationdate');
        $book->isbn = $request->get('isbn');
        $book->available = $request->get('available');
        $book->copies = $request->get('copies');
        $book->save();
        return redirect('book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = \App\Book::find($id);
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = \App\Book::find($id);
        return view('book.edit', compact('book', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book= \App\Book::find($id);
        $book->name=$request->get('name');
        $book->author=$request->get('author');
        $book->edition=$request->get('edition');
        $book->publisher=$request->get('publisher');
        $book->publicationdate=$request->get('publicationdate');
        $book->isbn=$request->get('isbn');
        $book->available=$request->get('available');
        $book->copies=$request->get('copies');
        $book->save();
        return redirect('book');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = \App\Book::find($id);
        $book->delete();
        return redirect('book')->with('success','Delete success');
    }
}
