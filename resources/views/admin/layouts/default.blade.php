<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    @include('admin.includes.head')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        @include('admin.includes.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.includes.nav')
            <!-- Navbar End -->
            <!-- Sale & Revenue Start -->
            @yield('content')
            <!-- Widgets End -->
            <!-- Footer Start -->
            @include('admin.includes.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('admin.includes.script')

    <!-- JavaScript Libraries -->
</body>

</html>
