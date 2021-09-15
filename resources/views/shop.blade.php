@extends('layouts.app',
[
    'styles' => ['shop']
])

@section('title', 'Notre boutique arrive bientôt')
@section('content')
<section>
    <img class="icon" src="{{ asset('img/shop/amulette.png')}}" alt="">
    @if (App::getLocale() == 'fr')
        <img class="text" src="{{ asset('img/shop/texte.png')}}" alt="">
    @else
        <img class="text" src="{{ asset('img/shop/texte_en.png')}}" alt="">
    @endif
</section>
@endsection
