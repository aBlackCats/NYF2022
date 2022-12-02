<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/timelines.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>NEW YEAR FESTIVAL | {{ $title }}</title>
</head>
<body style="background-color: #EEEBEB;">

<nav class="navbars">
    <div class="Main">
        <a href="#">
            <p class="main-txt">NEW YEARS</p>
            <p class="sub-txt">FESTIVAL 2022</p>
        </a>
   
        <hr class="line">
        <div class="dtp">
            <p class="date">27 - 28 DESEMBER</p>
            <p class="place">SAMARINDA CONVENTION HALL</p>
        </div>
    </div>
</nav>

    <div class="main">
        @yield('main')
    </div>

</body>

<footer>

    <div class="footer">

        <ul class="txt">
            <li><a href="#">JOBS</a></li>
            <li><a href="#">JOIN TEAM</a></li>
            <li><a href="#">TERMS OF USE</a></li>
            <li><a href="#">PRIVACY POLICY</a></li>
            <li><a href="#">HELP</a></li>
        </ul >

        <ul class="socials">
            <li style="margin-right: 1rem"><a href="#"><img src="img/wa.png"></a></li>
            <li><a href="#"><img src="img/yt.png"></a></li>
            <li><a href="#"><img src="img/twt.png"></a></li>
            <li><a href="#"><img src="img/inst.png"></a></li>
            <li><a href="#"><img src="img/fb.png"></a></li>
        </ul>
    </div>
</footer>

</html>