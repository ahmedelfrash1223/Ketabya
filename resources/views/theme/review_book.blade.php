<?php
use App\Models\Category;
$category = Category::findOrFail($book->category_id);
$category_name = $category->name;
?>
@extends('master')
@section('re-active', 'active')
@section('title', 'Reviewer Dashboard')
@section('hero-title', 'لوحة المراجعة')


@section('const')

    <div class="untree_co-section">
        <div class="container">

            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">تفاصيل الكتاب</h2>
                    <div class="p-3 p-lg-5 border bg-white">

                        <center>
                            <div class="book-container">
                                <div class="book-cover">
                                    <img src="/uploads/covers/{{ $book->cover_image }}" alt="Book Cover">
                                </div>
                                <div class="book-details">
                                    <div class="book-title">{{ $book->book_title }}</div>
                                    <div class="book-author"><span>المؤلف :</span> {{ $book->author_name }}</div>
                                    <div class="book-category"><span>القسم :</span> {{ $category_name }}</div>
                                    <div class="book-description">{{ $book->description }}</div>
                                </div>
                            </div>
                        </center>
                        <br><br>
                    </div>
                </div>


                <div class="col-md-6">

                    <div class="row mb-5">
                        <center>
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black"> الاقرار</h2>
                                <div class="p-3 p-lg-5 border bg-white">

                                    <div class="input-group w-75 couponcode-wrap" style="border: 5px solid #000000;">
                                        <img style="height: 280px" src="/uploads/pledges/{{ $book->pledge_file }}"
                                            alt="">
                                    </div>

                                </div>
                            </div>
                        </center>
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">تحميل الكتاب</h2>
                            <div class="p-3 p-lg-5 border bg-white">

                                <div class="input-group w-75 couponcode-wrap">
                                    <center>
                                        <div class="input-group-append">
                                            <a style="width: 500px" href="/uploads/books/{{ $book->book_file }}"
                                                download="book_pdf.pdf" class="btn btn-black btn-sm" type="button"
                                                id="button-addon2">تحميل</a>
                                        </div>
                                    </center>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black"> تاكيد الكتاب</h2>
                            <div class="p-3 p-lg-5 border bg-white">

                                <div style="transform: translate(250px)" class="input-group w-75 couponcode-wrap">
                                    <form action="{{ route('review.update', $book->id) }}" method="POST">
                                        @csrf
                                        <div class="input-group-append" style="transform: translate(-60px,50px)">
                                            <button style="height: 50px" class="btn btn-black btn-sm" type="submit"
                                                id="button-addon2">تاكيد</button>
                                        </div>
                                        <select style="direction: rtl" id="status" name="status" class="form-control">
                                            <option value="" selected disabled hidden>اختر الحاله</option>
                                            <option value="submit"> محقق الشروط</option>
                                            <option value="rejected"> غير محقق الشروط</option>

                                        </select>
                                        <x-input-error :messages="$errors->get('status')" class="mt-2" />

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>


@endsection
