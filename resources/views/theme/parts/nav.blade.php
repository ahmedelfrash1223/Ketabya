<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar" style="direction: rtl">

    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}"><img style="height: 50px" src="/images/result.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item @yield('home-active')">
                    <a class="nav-link" href="{{ route('index') }}">الرئيسية</a>
                </li>
                <li class="@yield('ser-active')"><a class="nav-link " href="{{ route('categories') }}">الاقسام</a></li>
                <li class="@yield('blog-active')"><a class="nav-link " href="{{ route('blog') }}">المؤلفين</a></li>
                <li class="@yield('con-active')"><a class="nav-link " href="{{ route('contact') }}">تواصل معنا</a></li>
                <li ></li>
                <li ></li>
                <li ></li>
                <li ></li>
                @if(Auth::check())
                @if(Auth::user()->status == 'admin')
                <li class="@yield('ad-active')"><a class="nav-link " href="{{ route('admin') }}">Admin</a></li>
                @endif
                @if(Auth::user()->status == 'reviewer')
                <li class="@yield('re-active')" ><a class="nav-link " href="{{ route('reviewer') }}">Reviewer</a></li>
                @endif
                @endif
            </ul>
            
            @if(!Auth::check())
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="{{ route('login') }}"><img  src="/images/user.svg"></a></li>
            </ul>
            @endif
            @if(Auth::check())
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="{{ route('prof') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Profile</a>
                </li>
                <li><a class="nav-link" href="{{ route('add') }}"><img style="height: 25px" src="/images/add.png"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="/images/cart.svg"></a></li>
                <form action="{{ route('logout') }}" method="post" id="myForm">
                    @csrf
                </form>
                <li><a onclick="submitForm()" class="nav-link" href="#"><img style="height: 25px" src="/images/logout2.svg"></a></li>
                <script>
                    function submitForm() {
                        // Triggering the form submission
                        document.getElementById('myForm').submit();
                    }
                    </script>
            </ul>
            @endif
        </div>
    </div>
        
</nav>
<!-- End Header/Navigation -->