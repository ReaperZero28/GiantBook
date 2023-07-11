<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Category;

class PublisherController extends Controller
{
    public function index(){

        $pubquery = Publisher::all();
        $catQuery = Category::all();

        return view('publisher', [
            'dataPublisher' => $pubquery,
            'category' => $catQuery
        ]);
    }
    public function showPublisherDetail($publisherID){

        $query = Publisher::find($publisherID);
        $catQuery = Category::all();

        return view('publisherDetail', [
            'pubDtlData' => $query,
            'category' => $catQuery
        ]);
    }

    public function publisherForm(){

        $catQuery = Category::all();

        return view('insertPublisher', [
            'category' => $catQuery
        ]);

        return view('/insertPublisher');
    }

    public function insertPublisher(Request $request){

        $request->validate([
            'name' => ['required', 'min:5'],
            'address' => ['required'],
            'phone' => ['required', 'min:10', 'min:13'],
            'email' => ['required', 'email'],
            'image' => ['required', 'image']
        ]);

        $imgName = $request->file('image')->getClientOriginalName();
        $store = $request->file('image')->storeAs('public', $imgName);

        $publisher = Publisher::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $imgName
        ]);

        return redirect('/publisher');
    }
}
