<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>POSSE</title>
</head>

<body>
    <header class="header">
        <div class="d-lg-flex header-container mx-auto">
            <div class="d-flex">
                <img src="/img/header-logo.png" class="header-img pr-3">
                <p class="header-text my-auto">1 week</p>
            </div>
        </div>
    </header>

    <main>
        <div class="main-container mx-auto">
            <div class="cards d-lg-flex justify-content-between">
                {{dd($news)}}
            </div>
        </div>
    </main>
