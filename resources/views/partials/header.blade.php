<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>La Molisana</title>
    </head>
    <body>
        <header>
            <img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_250,h_145/https://www.lamolisana.it/wp-content/uploads/2020/05/marchio-sito-test.png" alt="">
            <nav>
                <ul>
                    <li><a href="{{ route("home") }}">Home</a> </li>
                    <li><a href="{{ route("prodotti") }}">Prodotti</a> </li>
                    <li><a href="{{ route("contatti") }}">Contatti</a> </li>
                </ul>
            </nav>
        </header>
