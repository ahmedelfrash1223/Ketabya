<?php
use App\Models\Contact;
use App\Models\Book;

$contact = Contact::all();
$book = Book::get()->where('status', 'submit');

?>
@extends('master')
@section('hero-title', 'المؤلفين')
@section('title', 'Authors')
@section('blog-active', 'active')
@section('const')

    <!-- Start Authors Section -->
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                @if (count($book))
                    @php
                        $displayedAuthors = [];
                    @endphp

                    @foreach ($book as $books)
                        @if (!in_array($books->user->id, $displayedAuthors))
                            <div class="col-12 col-md-4 col-lg-3 mb-5">
                                <a class="product-item" href="{{ route('book.author', $books->user_id) }}">
                                     <img src="{{ $books->user->cover_image }}" style="height: 100px" class="img-fluid product-thumbnail">
                                    <h5 style="color: #3b5d50" class="product-title"> {{ $books->user->name }}</h5>
                                    <h6 style="transform: translate(0px,35px);color: #3b5d50" class="product-title">
                                        ({{ count(App\Models\Book::get()->where('user_id', $books->user_id)->where('status', 'submit')) }})
                                        كتاب</h6>
                                </a>
                            </div>
                            @php
                                $displayedAuthors[] = $books->user->id;
                            @endphp
                        @endif
                    @endforeach
                @endif




            </div>
        </div>
    </div>
    <!-- End Authors Section -->


    <!-- Start Testimonial Slider  -->
    @include('theme.parts.Testimonial')
    <!-- End Testimonial Slider -->




@endsection
