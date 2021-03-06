<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vodacom Foundation</title>

    <link rel="canonical" href="http://www.vodacomfoundation.co.ls" />
    <meta property="og:title" content="Vodacom Foundation" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="htttp://www.vodacomfoudation.co.ls" />
    <meta property="og:image" content="./images/Pool.jpg" />
    <meta property="og:description" content="Lancers Inn is an affordable, central and convenient hotel in Maseru, Lesotho providing quality accommodation for business travelers and tourists." />

    <meta name="description" content="Lancers Inn is an affordable, central and convenient hotel in Maseru, Lesotho providing quality accommodation for business travelers and tourists.">
    <meta name="keywords" content="Lesotho Tourism, Lesotho Accommodation, Maseru Accommodation, Maseru Hotel, Business Travel, Lancers Inn, Lancers">
    <meta name="application-name" content="Lancers Inn">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>

    <!--inject:css-->
    <link rel="stylesheet" href="{{mix('css/theme-bundle.css')}}">
    <!--endinject-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css" />
</head>

<body id="top">
    <img class="logo-rhomby" src="assets/img/logo-rhomby.png" alt="" />
    <div id="app">
        <!--inject:header:html-->
        <header id="header" class="tt-nav transparent-header">

    <div class="header-sticky light-header">

        <div class="container">

            <div id="materialize-menu" class="menuzord">

                <!--logo start-->
                <a href="./" class="logo-brand">
                    <img class="logo-dark" src="{{asset('img/logo.png')}}" alt="Logo" />
                    <img class="logo-light" src="{{asset('img/logo.png')}}" alt="Logo" />
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu pull-right light">
                    <li class="active">
                        <a href="./">Home</a>
                    </li>

                    <li>
                        <a href="./about">About</a>
                    </li>
                    <li>
                        <a href="./mentors">Mentors</a>
                    </li>
                    <li>
                        <a href="./startups">Startups</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
        <!--endinject-->
        <slideshow></slideshow>
        <headsup></headsup>
        <startups show-brief="true"></startups>
        <mentors show-title="true"></mentors>
        <partners></partners>
        <!--inject:footer:html-->
        <footer class="footer footer-four">
    <div class="primary-footer dark-bg lighten-4 text-center">
        <div class="container">

            <a href="#top" class="page-scroll btn-floating btn-large back-top waves-effect waves-light" data-section="#top">
                <i class="material-icons"></i>
            </a>
            <hr class="mt-15">
            <ul class="social-link tt-animate ltr mt-20">
                <li><a target="_blank" href="https://www.facebook.com/VodacomLesotho"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/VodacomLes"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/user/VodacomLesotho"><i class="fa fa-youtube"></i></a></li>
                <li><a target="_blank" href="https://plus.google.com/u/0/+VodacomLesothoVcl"><i class="fa fa-google-plus"></i></a></li>
            </ul>


            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.primary-footer -->

    <div class="secondary-footer dark-bg lighten-3 text-center">
        <div class="container">
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./about">About</a></li>
                <li><a href="/mentors">Mentors</a></li>
                <li><a href="./Startups">Startups</a></li>
            </ul>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.secondary-footer -->
</footer>
        <!--endinject-->
    </div>

    <!--inject:js-->
    <script src="./js/lib-bundle-424d6b5acf.js"></script>
    <!--endinject-->

    <script src="{{mix('js/app.js')}}"></script>

</body>

</html>