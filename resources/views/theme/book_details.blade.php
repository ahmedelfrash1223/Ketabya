<?php
use App\Models\Category;
$category = Category::findOrFail($book->category_id);
$category_name = $category->name;
?>
@extends('master')
@section('home-active', 'active')
@section('title', 'Book Details')
@section('hero-title', ' تفاصيل الكتاب')


@section('const')

    <center>
        <div class="untree_co-section">
            <center>
                <div class="container">
                    <center>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <center>
                                    <div style="transform: translate(300px)" class="p-3 p-lg-5 border bg-white">
                                        <h2 class="h3 mb-3 text-black">تفاصيل الكتاب</h2>

                                        <center>
                                            <div class="book-container">
                                                <div class="book-cover">
                                                    <img src="/uploads/covers/{{ $book->cover_image }}" alt="Book Cover">
                                                </div>
                                                <div class="book-details">
                                                    <div class="book-title">{{ $book->book_title }}</div>
                                                    <div class="book-author"><span>المؤلف :</span> {{ $book->author_name }}
                                                    </div>
                                                    <div class="book-category"><span>القسم :</span> {{ $category_name }}
                                                    </div>
                                                    <div class="book-category"><span>السعر :</span> {{ $book->price }}
                                                    </div>
                                                    <div class="book-description">{{ $book->description }}</div>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary-hover-outline">اضف للعربة</button>
                                        </center>
                                        <br><br>
                                    </div>
                                </center>
                            </div>

                        </div>
                    </center>
                    <!-- </form> -->
                </div>
            </center>
        </div>
    </center>


@endsection
