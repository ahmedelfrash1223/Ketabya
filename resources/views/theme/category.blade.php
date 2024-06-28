@extends('master')
@section('ad-active', 'active')
@section('title', 'users')
@section('hero-title', 'المستخدمين')
@section('const')
    <br><br>
    <div class="col-lg-8" style="transform: translate(650px)">
        <div class="subscription-form">
            <h3 class="d-flex align-items-center"><span class="me-1"></span><span>اضافه قسم جديد</span></h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('add.category') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-auto">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary">
                        <span class="">اضافه</span>
                    </button>
                </div>
            </form>

        </div>
    </div>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">id</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" style="transform: translate(30px)">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cat as $category)
                <tr>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row">{{ $category->id }}</th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <td>{{ $category->name }}</td>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <td>

                        <form action="{{ route('delete.category', $category->id) }}" id="myForm" method="POST">
                            @csrf
                            <button href="#" class="btn btn-danger" id="submitLink"
                                style="height: 40px">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>

@endsection
