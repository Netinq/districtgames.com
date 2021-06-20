@extends('layouts.app',
[
    'styles' => ['home']
])

@section('content')
<section id="part-1">
    <img id="people" src="{{ asset('img/home/part-1/dessin.png') }}" alt="People draw">
    <img id="cloud" class="cloud" src="{{ asset('img/home/part-1/cloud.svg') }}" alt="People draw">
    <img id="cloud2" class="cloud" src="{{ asset('img/home/part-1/cloud.svg') }}" alt="People draw">
    <img id="cloud3" class="cloud" src="{{ asset('img/home/part-1/cloud.svg') }}" alt="People draw">
    <img id="cloud4" class="cloud" src="{{ asset('img/home/part-1/cloud.svg') }}" alt="People draw">
    <div class="portfolio">
        <img id="portfolio" src="{{ asset('img/home/part-1/portfolio.png') }}" alt="Portefolio draw">
        <a class="button" href="">portfolio</a>
    </div>
    <div class="title">
        <h1><span>Bienvenue</span>
            sur districtgames</h1>
    </div>
</section>
@endsection
