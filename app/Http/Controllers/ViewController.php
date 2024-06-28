<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    

    
    public function blog(){
        return view('theme.blog');
    }
    public function contact(){
        return view('theme.contact');
    }
    public function index(){
        return view('theme.index');
    }
    public function categories(){
        $cat = Category::get();
        return view('theme.categories',compact('cat'));
    }
    
    public function add(){
        return view('theme.addnew');
    }
    public function admin(){
        return view('admindashboard');
    }
    public function reviewer(){
        return view('reviewerdashboard');
    }
    public function users(){
        $user = User::all();
        return view('theme.users',compact('user'));
    }
    public function details($id){
        $book = Book::findOrFail($id);
        return view('theme.book_details',compact('book'));
    }
   
    public function category($id){
        $book = Book::get()->where('category_id',$id)->where('status', 'submit');
        return view('theme.books_category',compact('book'));
    }
    public function author($id){
        $book = Book::get()->where('user_id',$id)->where('status', 'submit');
        return view('theme.books_author',compact('book'));
    }
   
    public function profile(){
        $id=Auth::user()->id;
        $user = User::findOrFail($id);
        return view('theme.profile',compact('user'));
    }
   
}
