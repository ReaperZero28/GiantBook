<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategory($categoryBook){

        $query = Category::find($categoryBook);
        $catQuery = Category::all();

        return view('category', [
            'dataCategory'=>$query,
            'category' => $catQuery
        ]);
    }
}
