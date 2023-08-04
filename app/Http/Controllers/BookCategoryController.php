<?php

namespace App\Http\Controllers;

use App\Models\Book_category;
use App\Http\Requests\StoreBook_categoryRequest;
use App\Http\Requests\UpdateBook_categoryRequest;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBook_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBook_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function show(Book_category $book_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Book_category $book_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBook_categoryRequest  $request
     * @param  \App\Models\Book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBook_categoryRequest $request, Book_category $book_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book_category  $book_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book_category $book_category)
    {
        //
    }
}
