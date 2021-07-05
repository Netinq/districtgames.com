@extends('layouts.app',
[
    'styles' => ['home']
])

@section('content')
@include('home.section-1')
@include('home.section-2')
@include('home.section-3')
<script src="{{ asset('js/haut.js')}}"></script>
<script src="{{ asset('js/scroll.js')}}"></script>
@endsection
