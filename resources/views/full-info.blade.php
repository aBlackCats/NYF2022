@extends('layouts.navbarTimeline')

@section('main')
    
    <div class="content">
        <p class="title">INFORMATION</p>
        <div style="display: flex">
            @foreach ($news as $news) 
            <div class="cards">
                <p>{{ $news->Timeline->title }}</p>
                <div style="display: flex; margin: 0 2% 0 2%">
                    <div class="info">
                        <p class="main">DATE</p>
                        <p class="sub">{{ $news->Timeline->date }}</p>
                    </div>
                    <div class="info">
                        <p class="main">TIME</p>
                        <p class="sub">{{ $news->Timeline->time }}</p>
                    </div>
                    <div class="info">
                        <p class="main">LOCATION</p>
                        <p class="sub">{{ $news->Timeline->location }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection