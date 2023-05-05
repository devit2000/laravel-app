<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    @include('admin.includes.head')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        @include('admin.includes.sidebar')
        <div class="content">
            @include('admin.includes.nav')
            @yield('content')
            @include('admin.includes.footer')
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('admin.includes.script')
</body>

</html>
