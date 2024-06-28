@extends('master')
@section('ad-active', 'active')
@section('title', 'users')
@section('hero-title', 'المستخدمين')
@section('const')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col" style="transform: translate(90px)">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $u)
                <tr>
                    <th scope="row">{{ $u->id }}</th>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->status }}</td>
                    <td>
                        <a href="{{ route('edit.users', $u->id) }}"class="btn btn-primary"
                            style="height: 40px;width: 115px">Edit</a><br>
                        <form action="{{ route('delete.users', $u->id) }}" id="myForm" method="POST">
                            @csrf
                            <div style="transform: translate(120px,-40px)"><button href="#" class="btn btn-danger"
                                    id="submitLink" style="height: 40px">Delete</button></div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
@endsection
