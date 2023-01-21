
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/manu.css" media="screen and (min-width: 1120px)">
    <link rel="stylesheet" href="css/manu_phone.css" media="screen and (max-width: 1120px)">
</head>
 <div id="spiner">
        <div class="loader_main">
            <div class="loader">
                <div class="loader loader3"></div>
            </div>
        </div>
        <div class="Lodh1">
            <h1>Please Wait Few Seconds...</h1>
        </div>
    </div>
<header>
    <div class="mamu_phone" id="PhoneManu">
        <div class="logo"> <a href="/"> Henil code </a></div>
        <i class="fa fa-bars" id="manu_bar"></i>
    </div>
    <div class="main" id="menu">
        <div class="xl De_none"><i class="bi bi-x-lg"></i></div>
        <div class="nav_logo center De_none">
            <img src="favicon.ico" class="imageP" alt="">
        </div>
        <div class="logo_name center">
            <div class="logo"> <a href="/"> Henil code </a></div>
        </div>
        <div class="manus center">
            <div class="manu_link"><a href="/"  class="{{ Request::is('/') ? 'active':''}}"> <i class="fa fa-home"></i>
                    Home</a></div>
            <div class="manu_link"><a href="source"  class="{{ Request::is('source') ? 'active':''}}"> <i class="bi bi-forward"></i> source</a></div>
            <div class="manu_link"><a href="about.html"> <i class="bi bi-person"></i> about</a></div>
            <div class="manu_link"><a href="https://henil.rf.gd/SignUp/"><i class="bi bi-link-45deg"></i> Sign Up</a></div>
        </div>
        <div class="FoT De_none">
            <div class="footer">
                <h2><a href="https://www.instagram.com/henil_v_p/" class="bi bi-instagram"></a></h2>
                <h2><a href="https://www.facebook.com/henil.prajapati.376" class="bi bi-facebook"></a></h2>
                <h2><a href="https://henilcode.wordpress.com/" target="_blank"><i class="fa fa-wordpress"></i></a></h2>
            </div>
            <div class="CoB"><span class="botF"> &copy; 2022 Henil Code </span></div>
        </div>
    </div>
</header>
<div class="screen-size">
    @yield('body')
</div>
<div class="FooterB center">
    {{-- {{$h}}
    @if ($h)
        <h1>He</h1>
    @endif  --}}
    <div class="Bfooter center">
        <div class="nav_link">
            <ul class="center">
                <li><a href="/">Home</a></li>
                <li><a href="source">source</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="https://henil.rf.gd/SignUp/">SignUp</a></li>
            </ul>
        </div>
        <div class="icon center">
            <h2><a href="https://www.instagram.com/henil_v_p/" class="bi bi-instagram"></a></h2>
            <h2><a href="https://www.facebook.com/henil.prajapati.376" class="bi bi-facebook"></a></h2>
            <h2><a href="https://henilcode.wordpress.com/" target="_blank"><i class="fa fa-wordpress"></i></a></h2>
        </div>
    </div>
    <span class="botF">&copy; 2022 Henil Code</span>
</div>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/reload.js"></script>
</html>