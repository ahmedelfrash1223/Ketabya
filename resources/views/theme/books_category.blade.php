@extends('master')

@section('ser-active', 'active')
@section('title', 'categories')
@section('const')

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                @if (count($book))
                    @foreach ($book as $books)
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="{{ route('book.details', $books->id) }}">
                                <img style="height: 250px" src="/uploads/covers/{{ $books->cover_image }}"
                                    class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $books->book_title }}</h3>
                                <h5 style="color: #3b5d50" class="product-title"> {{ $books->author_name }}</h5>
                                <img style="height: 100px" src="/images/rating.png" class="img-fluid product-thumbnail">
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
