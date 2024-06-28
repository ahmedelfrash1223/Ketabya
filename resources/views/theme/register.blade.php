@extends('master')
@section('title', '| Register')
@section('hero-title', 'تسجيل حساب جديد')
@section('const')



    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4" style="transform: translateX(160px)">

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Name -->
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class="text-black" for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name') }}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="{{ old('email') }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <button style="background-color: #3b5d50" type="submit"
                                class="btn btn-primary-hover-outline mb-4">Register</button>
                            <a href="{{ route('login') }}" class="mx-3">Already have an account?</a>
                        </form>
                        <!------------------------ GOOGLE BUTTON -->
                        <button style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:22px;transform: translateX(-23px)" src="/images/google.png" alt="">
                            تسجيل باستخدام جوجل
                        </button>
                        <!------------------------ FACEBOOK BUTTON -->
                        <button style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:24px;transform: translateX(-15px)" src="/images/facebook.png" alt="">
                            تسجيل باستخدام فيسبوك
                        </button>
                    </div>

                </div>

            </div>

        </div>


    </div>

@endsection
