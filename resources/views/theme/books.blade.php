@extends('master')
@section('ad-active', 'active')
@section('title', 'Books')
@section('hero-title', 'الكتب')
@section('const')
    <br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">id</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">cover</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Author Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Book Title</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Description</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Price</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $books)
                <tr>
                    <th scope="row"></th>
                    <th scope="row">{{ $books->id }}</th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row"><img height="100px" src="/uploads/covers/{{ $books->cover_image }}" alt="">
                    </th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row">{{ $books->author_name }}</th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row">{{ $books->book_title }}</th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row">{{ $books->description }}</th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row">{{ $books->price }}</th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row">{{ $books->status }}</th>
                    <th style="transform: translate(170px)">

                        <form action="{{ route('delete.book', $books->id) }}" id="myForm" method="POST">
                            @csrf
                            <button href="#" class="btn btn-danger" id="submitLink"
                                style="height: 40px">Delete</button>
                        </form>
                    </th>
                    <th scope="row"></th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>

@endsection
