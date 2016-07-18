<!doctype html>
<html lang="en">

<head>
    <title> HackVratsa 2016</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="HackVratsa е тридневно събитие за хора с интереси в софтуерна разработка. Темата е Hack for Vratsa - технологии, които подобряват живота и средата във Враца.">
    <meta name="keywords"
          content="хакатон, враца, програмиране, враца софтуер, hackathon, vratsa, software, php, java, javascript">
    <meta name="author" content="Vratsa Software">
    <meta name="theme-color" content="#1C8800">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/favicon.jpg')}}" type="image/jpg" sizes="16x16">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ekko-lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/ekko-lightbox.min.js')}}"></script>
</head>

<body>
<div class="container">
    <div class="logo wrapper">
        <div class="row">
            <div class="col-md-2">
                <img src="img/logo1.jpg" class="img-responsive img-logo" height="30px"
                     alt="VratsaHack Logo"/>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 textContainer">
                <h2><span style="color: green; text-align: center;">HackVratsa</span> 15-17.04.2016</h2>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="/">Начало</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">За Хакатоните<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/hackathons">Какво е Хакатон?</a></li>
                        <li><a href="/faq">Често Задавани Въпроси</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Хак 2016<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/code4tech">Code4.Tech</a></li>
                        <li><a href="/program">Програма</a></li>
                        <li><a href="/teams">Отбори</a></li>
                        <li><a href="">Награди</a></li>
                        <li><a href="">Идеи за проект</a></li>
                        <li><a href="">Галерия</a></li>
                        <li><a href="">Проекти</a></li>
                        <li><a href="">Контакти</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="">Правила</a></li>
                <li class="dropdown"><a href="">Партньори</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
    @section('sidebar')
        <div class="col-md-4 right-sidebar">
            <h3>
                Новини
            </h3>
            <p>
                HackVratsa вече е част от националната инициатива <a href="/code4tech">Code4.Tech</a>.
            </p>
            <p>
                Сред менторите на хакатона ще видите и някои от познатите ви лица от CodeWeek Враца.
            </p>
        </div>
    @show
</div>
<div class="col-md-12 footer">
    <div class="col-md-12 row">
        <div class="col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-0"><a
                    href="http://komfo.com/" target="_blank"><img
                        src="img/komfo_logo.png" width="100%;"/></a></div>
        <div class="col-md-2 col-md-offset-0 col-sm-2 col-xs-2"><a href="http://www.vmware.com/" target="_blank"><img
                        src="img/vmware_logo.png" width="100%;"/></a></div>
        <div class="col-md-2 col-md-offset-0 col-sm-2 col-xs-2"><a href="http://www.questers.com/" target="_blank"><img
                        src="img/questers-logo.png" width="100%;"/></a></div>
        <div class="col-md-2 col-md-offset-0 col-sm-2 col-xs-2"><a href="http://ecommera.com/about-us"
                                                                   target="_blank"><img id="ecommera"
                                                                                        src="img/eCommera.png"
                                                                                        width="100%;"/></a></div>
        <div class="col-md-2 col-md-offset-0 col-sm-2 col-xs-2"><a href="http://programista.bg/" target="_blank"><img
                        id="programista" src="img/programista_logo.jpg" width="100%;"/></a>
        </div>
        <div class="col-md-2 col-md-offset-0 col-sm-2 col-xs-2"><a href="http://www.vratza.bg/" target="_blank"><img
                        id="vratsa" src="img/vratsa_logo.jpg" height="100px;"/></a>
        </div>
    </div>
    <div class="col-md-12 row">Copyright &copy; 2016 Vratsa Software Community. Част от <a href="http://code4.tech/"
                                                                                           target="_blank">
            Code4.Tech </a></div>
</div>
</div>
<script>
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-51734359-7', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>