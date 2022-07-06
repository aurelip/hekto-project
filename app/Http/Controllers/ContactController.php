<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contactpage');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'

        ]);

        Contacts::create($request->all());

        return redirect()->back()
            ->With(['success' => 'Thank you for contact us. We will contact you shortly.']);
    }
}
