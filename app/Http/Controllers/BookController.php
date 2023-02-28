<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
    public function index(){
   
    //    $books = Book::orderBy('id','desc')->paginate(10);
       $books = Book::latest()->paginate(10);
        return view('index',compact('books'));
    }

    public function ajax_paginate(Request $request){
        dd($request);
        // $books = Book::latest()->paginate(10);
        // return view('index',compact('books'))->render();
    }
}
