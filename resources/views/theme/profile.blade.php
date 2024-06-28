@extends('master')
@section('title', 'profile Details')
@section('hero-title', ' تفاصيل الحساب')


@section('const')

    <center>
        <div class="untree_co-section">
            <center>
                <div class="container">
                    <center>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <center>
                                    <div style="transform: translate(300px)" class="p-3 p-lg-5 border bg-white">
                                        <h2 class="h3 mb-3 text-black">تفاصيل الحساب</h2>

                                        <center>
                                            <div class="book-container">
                                                <div class="book-cover">

                                                    <img src="{{ $user->cover_image }}" alt="">
                                                </div>
                                                <div class="book-details">
                                                    <div class="book-author"> {{ $user->name }}<span> : الاسم</span>
                                                    </div>
                                                    <div class="book-category"> {{ $user->email }}<span> : البريد</span>
                                                    </div>
                                                    <div class="book-category"> {{ $user->status }}<span> : الحالة</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="input-group w-75 couponcode-wrap">
                                                <form action="{{ route('profile.photo', $user->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <label for="cover_image" class="form-label">تغير صورة الحساب</label>

                                                    <input class="form-control" name="cover_image" type="file"
                                                        id="cover_image" style="height: 38px">
                                                    <br>
                                                    <div style="transform: translate(150px,-66px)">
                                                        <button style="height: 38px" class="btn btn-black btn-sm"
                                                            type="submit" id="button-addon2">تاكيد</button>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('cover_image')" class="mt-2" />

                                                </form>
                                            </div>
                                        </center>
                                        <br><br>
                                    </div>
                                </center>
                            </div>

                        </div>
                    </center>
                    <!-- </form> -->
                </div>
            </center>
        </div>
    </center>


@endsection
