<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Diego Llorente Domínguez - studio architektoniczne, architektura zewnętrzna i wewnętrzna Kraków. ">
    <meta name="keywords" content="architekt, studio architektoniczne, architektura zewnętrzna, architektura wewnętrzna, Kraków, Diego Llorente Domínguez">
    <title>Nowoczesna archtektura  Diego Llorente Domínguez</title>

    <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="/js/semantic.min.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <link rel="stylesheet" href="cssf/fontello.css" type="text/css" />
    <link href="/css/lightbox.css" rel="stylesheet">
    <script src="/js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="header-container">
            <div class="header-wraper">
                <div class="header-logo">
                    <a class="header-nav" href="{{route('front.glowna')}}"><img class="logo" src="/images/logo.png"></a>
                </div>
                <div class="header-navigation">
                    <a class="header-nav" href="{{route('front.omnie')}}">O MNIE</a>
                    <a class="header-nav" href="{{route('front.projekt')}}">PROJEKTY</a>
                    <a class="header-nav" href="{{route('front.photo')}}">FOTOGRAFIA</a>
                    <a class="header-nav" href="{{route('front.kontakt')}}">KONTAKT</a>
                </div>
            </div>
        </header>

        <section>
            <div>
                @yield('body')
            </div>
        </section>

        <footer>
            &copy Studio Architektoniczne Llorente Domínguez diegollorented@gmail.com / 516641733
        </footer>
    </div>

</body>
</html>