@extends('layouts.app',
[
    'styles' => ['portfolio']
])
@section('title', 'Découvrez notre portfolio')
@section('content')
@include('portfolio.section-1')
@include('portfolio.section-2')
@endsection
