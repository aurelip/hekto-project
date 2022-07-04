<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    //
    public function index()
    {
        $data = Item::all();

        return view('homepage' , compact('data'));
    }
}