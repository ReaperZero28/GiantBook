<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index(){

        $query = Book::all();
        $catQuery = Category::all();

        return view('home', [
            'dataBook'=>$query,
            'category' => $catQuery
        ]);
    }
    
    public function showBookDetail($bookID){
        $query = Book::find($bookID);
        $catQuery = Category::all();

        return view('bookDetail', [
            'bookDtlData' => $query,
            'category' => $catQuery
        ]);
    }
}
