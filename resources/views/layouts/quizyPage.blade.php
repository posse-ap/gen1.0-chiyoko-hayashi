<html>
<head>
    <title>@yield('title')</title>
    <style>
    h1{font-size: 19px;
        line-height: 27px;
        font-weight: 700;
        margin-bottom: 0;
        color: #161616;}
    h2{
        font-size: 17px;
        line-height: 20px;
        font-weight: 600;
        position: relative;
        display: inline-block;
        margin-bottom: 1em;
    }
    h2:before {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -15px;/*線の上下位置*/
        display: inline-block;
        width: 120px;/*線の長さ*/
        height: 2px;/*線の太さ*/
        transform: translateX(-85%);/*位置調整*/
        background-color: #00ab36;/*線の色*/
        border-radius: 2px;/*線の丸み*/
    }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>