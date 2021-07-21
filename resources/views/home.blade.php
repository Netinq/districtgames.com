@extends('layouts.app',
[
    'styles' => ['home']
])

@section('content')
@include('home.section-1')
@include('home.section-2')
@include('home.section-3')
@include('home.section-4')
@include('home.section-5')
@include('home.section-6')
@include('home.section-7')
@include('home.section-8')
<script src="{{ asset('js/haut.js')}}"></script>
<script src="{{ asset('js/carousel.js')}}"></script>
<script src="{{ asset('js/scroll.js')}}"></script>
<script src="{{ asset('js/round.js')}}"></script>
@endsection
