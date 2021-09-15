@extends('layouts.app',
[
    'styles' => ['shop']
])

@section('title', 'Notre boutique arrive bientôt')
@section('content')
<section>
    <img class="icon" src="{{ asset('img/shop/amulette.png')}}" alt="">
    <img class="text" src="{{ asset('img/shop/texte.png')}}" alt="">
</section>
@endsection
