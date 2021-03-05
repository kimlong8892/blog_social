<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('front_end.include.head')
    @yield('head')
</head>
<body>
    @include('front_end.include.header')
    <div class="container">
        @yield('main')
    </div>
    <section id="blog" class="blog">
        <div class="container">
            @yield('blog')
        </div>
    </section>
    @include('front_end.include.footer')
    @include('front_end.include.include_js_for_master')
</body>
</html>
