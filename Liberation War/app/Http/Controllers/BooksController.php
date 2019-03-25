<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function Books(){

        return view('Books.Books');
    }
}
