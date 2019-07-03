<html>
<head>
    <title>Home App</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')

<div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc/sidebar')
        </div>
    </div>
</div>

<footer id="footer" class="text-center">Copyright &copy; 2019</footer>


</body>
</html>
