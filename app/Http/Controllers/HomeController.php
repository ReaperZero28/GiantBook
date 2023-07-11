<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function index(){

        $catQuery = Category::all();

        return view('contact', [
            'category' => $catQuery
        ]);
    }
}
