@extends('layouts.navbar')

@section('main')
@if (session()->has('succsess'))
  <div style="    background: #00000059; color: white; position: fixed; width: 100%; top: 5.9375rem; border: none" class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('succsess') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="background: none; color: white">x</button>
  </div>
@endif

    <div class="hero-img">
        <div class="hero-text">
            <a href="#ticket" style="background: rgba(251, 0, 0, 0.78);">BELI TIKET</a>
            <a href="#carouselExampleControls" style="background: #0332DA; margin-left: 23px">LINE-UP</a>

            <p class="title" style="margin-top: 30px">FESTIVAL</p>
            <p class="title" style="color: #FFFDFDDB 80%">SAMARINDA CONVENTION HALL</p>
        </div>
    </div>

    <!-- About Section -->
    <div class="section" id="about">
        <p class="main">NEW YEARS FESTIVAL</p>
        <div class="sub">
            <p id="timer" style="margin-right: 12px"></p>
            <hr style="border: 2px solid #E7302A; transform: rotate(90deg); width: 30px; height: 0px; background:#E7302A; opacity:1;">
            <p style="margin-left: 12px">40% SOLD OUT</p>
        </div>

        <div style="display: flex">
            <div style="position: relative; left:4%; width: 42%">
               <p class="title" >ABOUT</p>
                <div class="cards">
                    <p class="title">ABOUT US</p>
                    <p class="excerpt">NEW YEARS FESTIVAL adalah Festival Musik yang diselenggarakan untuk menyambut tahun baru. Tujuan kami adalah menciptakan tempat yang aman dalam suasana meriah dan komunitas muda yang ramah.</p>
                </div>
            </div>
            
            <div id="carouselExampleControls" class="content carousel slide" data-bs-ride="carousel" style="position: relative; left:16%; width:42%">
                <p class="title">NEWS</p>
                <div class="carousel-inner" style="margin-top: -1rem">
                    @foreach ($News as $news)
                    <div class="cards text carousel-item active" data-bs-interval="3000">
                        <p class="title">{{ $news->title }}</p>    
                        <p class="excerpt">{{ $news->body }}</p>
                        <a href="/info/{{ $news->slug }}" target="_blank">MORE</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Guest Speaker -->
        <div class="guest">
            <p class="main">GUEST SPEAKER</p>
            <div class="guest-img">
                <div style="margin-right: 16.6%">
                    <img src="img/LEE JEONG HOON.png" alt="">
                    <figcaption>LEE JEONG HOON</figcaption>
                </div>
                <div>
                    <img src="img/DESTA.png" alt="">
                    <figcaption>DESTA</figcaption>
                </div>
                <div style="margin-left: 16.6%">
                    <img src="img/ENZY STORIA.png" alt="">
                    <figcaption>ENZY STORIA</figcaption>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Ticket  Section -->
    <div class="section" id="ticket">
        <div class="ticket-img">
            <a href="#" style="margin-top: 21px; text-align: center; text-decoration: none">
                <img src="img/Logo Tiket Festival.png">
                <figcaption style="color: #47B9C3; margin-top:5px; width:inherit">TICKET</figcaption>
                <figcaption class="sub">Tiket FESTIVAL merupakan area tempat duduk dengan tribun dibelakang VIP</figcaption>
            </a>
            <a href="#" style="margin-top: 41px; margin-left:19.2%; text-align: center; text-decoration: none">
                <img src="img/Logo Tiket VIP.png">
                <figcaption style="color: #F4D44A; margin-top:18px; width:inherit">VIP</figcaption>
                <figcaption class="sub">Tiket VIP merupakan area tempat duduk dengan ketinggian sama rat; text-align: centera</figcaption>
            </a>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="section" id="contact">
        <div class="content">
            <a href="https://www.google.com/maps/place/Samarinda+Convention+Hall/@-0.4545299,117.1509857,17z/data=!3m1!4b1!4m5!3m4!1s0x2df678bece252bc1:0x752dcb1ee377bcec!8m2!3d-0.4545353!4d117.1531797?hl=id" target="_blank" class="box" style="background: #F9B234">
                <img src="img/IconMaps.png" style="width: 224px; height: 112px; margin-top: 17px">
                <figcaption>MAPS</figcaption>
            </a >
            <a href="/info" target="_blank" class="box" style="background: #A3185B">
                <img src="img/IconInfo.png" style="width: 78px; height: 69px; margin-top: 38px; margin-bottom:22px">
                <figcaption>INFO</figcaption>
            </a >
            <a href="#" class="box" style="background: #12A19B">
                <img src="img/IconMerch.png" style="width: 109px; height: 113px; margin-top: 16px">
                <figcaption>MERCH</figcaption>
            </a >
        </div>

        <div class="newsletter">
            <p class="main">TETAP UP TO DATE DENGAN <b>NEWSLETTER</b> KAMI</p>
            <form action="/newsletter" method="get">
                @csrf
                <input type="email" placeholder="Email" name="email" required>
                <button type="submit">KIRIM</button>
            </form>
        </div>
    </div>

@endsection