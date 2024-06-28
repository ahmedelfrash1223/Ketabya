<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
       'user_id' , 'author_name', 'book_title','category_id' ,'description', 'cover_image', 'book_file','pledge_file','status','price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
