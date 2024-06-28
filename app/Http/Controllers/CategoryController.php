<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get(){
        $cat = Category::get();
        return view('theme.category',compact('cat'));
    }
    public function add(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
        
        ]);
    
        // Create a new contact
        Category::create($data);
    
        // Redirect back or wherever you want after storing
        return back();
    }
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
}
