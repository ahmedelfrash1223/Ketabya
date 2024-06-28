<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function store(Request $request){
      $data =  $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
        ]);
        Subscribe::create($data);
        return redirect()->back()->with('status', 'You have successfully subscribed!');
    }
}
