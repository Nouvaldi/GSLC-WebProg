@extends('template')
@section('title', 'Champions - League of Legends')

@section('content')
    <div class="container" style="padding: 100px 0">
        <div class="row row-cols-5">

            @foreach ($champions as $champion)
                <div class="col gy-4 gx-4">
                    <a href="/champions/{{$champion->name}}" class="text-decoration-none">
                        <div class="card shadow" style="border: 0;">
                            <img src={{$champion->image_url}} class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title text-dark text-uppercase">{{$champion->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
