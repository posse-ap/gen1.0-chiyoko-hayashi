<html>
<head>
    <title>@yield('title')</title>
    <style>
    h1{font-size: 19px;
        line-height: 27px;
        font-weight: 700;
        margin-bottom: 0;
        color: #161616;}
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>