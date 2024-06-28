<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">

        <div class="sofa-img">
            <img style="height: 250px; transform: translate(0px,60px)" src="/images/book (9).png" alt="Image" class="img-fluid">
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img src="/images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('subscribe') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-auto">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror                
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email"value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="">Subscribe</span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row g-5 mb-5" style="direction: rtl">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="{{ route('index') }}" class="footer-logo"><img style="height: 70px" src="/images/outt.png" alt=""></a></div>
                <p class="mb-4">كتابيّة" هو موقع إلكتروني متخصص في بيع الكتب عبر الإنترنت، حيث يوفر مجموعة واسعة ومتنوعة من الكتب في مختلف المجالات والمواضيع.</p>

                
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love  By Ketabya Team  
    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>
        </div>

        

    </div>
</footer>
<!-- End Footer Section -->	