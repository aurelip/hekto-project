<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    //
    public function index()
    {
        $data = Item::all();

        return view('homepage', compact('data'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $items = Item::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get()
            ;
 $empty =$items->isNotEmpty()
 ;
        return view('search', compact('items', 'empty'));

    }

}
