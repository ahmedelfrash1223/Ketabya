@extends('master')
@section('title', '| Login')
@section('hero-title', 'تسجيل الدخول')

@section('const')
    <!-- Start Login Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4" style="transform: translateX(160px)">

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!--------------- Email -->
                                <div class="col-8">
                                    <div class="form-group">
                                        <label class="text-black" for="email">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" id="email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!--------------- Password -->
                                <div class="col-8 mb-4">
                                    <div class="form-group">
                                        <label class="text-black" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <!------------- LOGIN BUTTON -->
                            <button style="background-color: #3b5d50" type="submit"
                                class="btn btn-primary-hover-outline mb-4">Log In</button>
                            <a href="{{ route('register') }}" class="mx-3">Don’t have an account?</a>

                        </form>

                        <!------------------------ GOOGLE BUTTON -->
                        <button style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:22px;transform: translateX(-23px)" src="/images/google.png" alt="">
                            تسجيل الدخول باستخدام جوجل
                        </button>
                        <!------------------------ FACEBOOK BUTTON -->
                        <button style="background-color: #fff;color:black;border-radius: 5px;width: 65%;border-color: gray"
                            type="submit" class="btn btn-primary-hover-outline mb-4"><img
                                style="height:24px;transform: translateX(-15px)" src="/images/facebook.png" alt="">
                            تسجيل الدخول باستخدام فيسبوك
                        </button>
                    </div>

                </div>

            </div>

        </div>
        {{-- --------------------------- --}}


    </div>

    <!-- End Login Form -->


@endsection
