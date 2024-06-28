<!doctype html>
<html lang="en">

@include('theme.parts.head')

<body>

    <!-- Start Header/Navigation -->
    @include('theme.parts.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    @include('theme.parts.hero')
    <!-- End Hero Section -->

    @yield('const')

    <!-- Start Footer Section -->
    @include('theme.parts.footer')
    <!-- End Footer Section -->
    @include('theme.parts.scripts')


</body>

</html>
