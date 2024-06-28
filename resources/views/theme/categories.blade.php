<?php
use App\Models\Contact;

$contact = Contact::all();

?>
@extends('master')

@section('hero-title', 'اقسام الكتب')
@section('ser-active', 'active')
@section('title', 'categories')
@section('const')

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @foreach ($cat as $category)
                    <!-- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="{{ route('book.category', $category->id) }}">
                            <h3 style="transform: translate(0px,35px)" class="product-title">{{ $category->name }}</h3>
                            <h6 style="transform: translate(0px,35px);color: #3b5d50" class="product-title">
                                ({{ count(App\Models\Book::get()->where('category_id', $category->id)->where('status', 'submit')) }})
                                كتاب</h6>
                        </a>
                    </div>
                    <!-- End Column 1 -->
                @endforeach



            </div>
        </div>
    </div>


 <!-- Start Testimonial Slider  -->
 @include('theme.parts.Testimonial')
 <!-- End Testimonial Slider -->
@endsection
