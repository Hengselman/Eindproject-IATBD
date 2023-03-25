<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <section class="navbar">
        <figure><img src="img/icon_hamburger.png" alt="" href="javascript:void(0);" class="navbar__hamburger" onclick="showNavbar()"></figure>
        <ul class="navbar__ul" id="navbar__links">
            <li class="navbar__li"><a href="/collectie">Alle huisdieren</a></li>
            <li class="navbar__li"><a onclick="randomHuisdier()" id="randomID" href="">Bekijk een willekeurig huisdier</a></li>
            <li class="navbar__li"><a href="/collectie/create">Voeg een huisdier toe</a></li>
            <li class="navbar__li"><a href="/dashboard">Profiel</a></li>
        </ul>
    </section>
    @yield('content')
</body>
</html>