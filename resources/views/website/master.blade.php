<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{asset('/')}}website/favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    @include('website.includes.style')
    <title> Nayeem Furniture-Mart | @yield('title') </title>
</head>
<body>
@include('website.includes.header')
@yield('body')
@include('website.includes.footer')
@include('website.includes.script')
</body>
</html>
