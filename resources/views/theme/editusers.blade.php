@extends('master')
@section('ad-active', 'active')
@section('title', 'Edit Users')
@section('hero-title', ' تعديل المستخدمين ')
@section('const')
    <!-- Start Login Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4" style="transform: translateX(160px)">

                        <form action="{{ route('update.users', $user->id) }}" method="POST">

                            @csrf
                            <div class="row">
                                @if (session('status'))
                                    <div class="alert alert-success" style="width:565px ">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <!-- Name -->
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class="text-black" for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ $user->name }}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="{{ $user->email }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="password">Status</label>
                                        <select id="options" name="status" class="form-control">
                                            <option value="" selected disabled hidden>{{ $user->status }}</option>
                                            <option value="reviewer">Reviewer</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                    </div>
                                </div>


                            </div>

                            <button style="background-color: #3b5d50" type="submit"
                                class="btn btn-primary-hover-outline mb-4">Confirm</button>
                        </form>


                    </div>

                </div>

            </div>

        </div>


    </div>
    {{-- --------------------------- --}}


    </div>
@endsection
