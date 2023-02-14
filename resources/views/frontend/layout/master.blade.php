<!doctype html>
<html lang="en">
<head>
    <title> @yield('title') </title>
    @include('frontend.layout.head')
</head>

<body class="root">

            @include('frontend.layout.header')

                @yield('main-content')

            @include('frontend.layout.footer')

</body>
@include('frontend.layout.foot')
</html>
