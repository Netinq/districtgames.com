@extends('layouts.app',
[
    'styles' => ['home']
])

@section('content')
@include('home.section-1')
@include('home.section-2')
<script src="{{ asset('js/haut.js')}}"></script>
<script src="{{ asset('js/scroll.js')}}"></script>
@endsection
