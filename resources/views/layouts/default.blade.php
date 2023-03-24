<!DOCTYPE html>
<html lang="en">

<head>
    <title>Karl - Fashion Ecommerce Template | Home</title>
    @include('includes.head')

</head>

<body>
    @include('includes.sidebar')
    <div id="wrapper">
        @include('includes.header')
        @include('includes.discount')
        @include('includes.slide')
        @include('includes.category')
        @include('includes.modal')
        @yield('content')
        @include('includes.footer')
    </div>
    @include('includes.script')

</body>

</html>
