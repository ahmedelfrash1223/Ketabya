@extends('master')
@section('ad-active', 'active')
@section('title', 'Admin Dashboard')
@section('hero-title', 'لوحة التحكم')
@section('const')
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row" style="transform: translate(150px)">

                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{ route('index.book') }}">
                        <h3 style="transform: translate(0px,35px)" class="product-title">الكتب</h3>
                    </a>
                </div>
                <!-- End Column 1 -->
                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{ route('category') }}">
                        <h3 style="transform: translate(0px,35px)" class="product-title">الاقسام</h3>
                    </a>
                </div>
                <!-- End Column 1 -->
                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{ route('users') }}">
                        <h3 style="transform: translate(0px,35px)" class="product-title">المستخدمين</h3>
                    </a>
                </div>
                <!-- End Column 1 -->



            </div>
        </div>
    </div>
@endsection
