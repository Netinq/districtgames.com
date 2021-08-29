@extends('layouts.app',
[
    'styles' => ['infos']
])

@section('title', 'Retrouvez toutes nos informations')
@section('content')
@include('infos.section-1')
@include('infos.section-2')
@include('infos.section-3')
@endsection
