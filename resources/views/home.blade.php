@extends('template')
@section('title', 'Home - League of Legends')

@section('content')
    <div class="container-fluid user-select-none" style="background: url(https://cdnb.artstation.com/p/assets/images/images/050/404/523/4k/grafit-studio-mid-lane-final.jpg?1654769939) no-repeat center; background-size: cover; height: 100vh;">
        <div class="container position-relative vh-100 text-center">
            <p class="text-light fw-bold position-absolute start-50 translate-middle bg-info w-25 p-3 border border-light" style="z-index: 1; top: 80%;">Welcome to<br>League of Legends</p>
            <video class="position-absolute top-50 start-50 translate-middle" src="https://www.leagueoflegends.com/static/hero-0632cbf2872c5cc0dffa93d2ae8a29e8.webm" autoplay loop muted style="height: 75vh"></video>
        </div>
    </div>

@endsection
