@extends('layouts.app',
[
    'styles' => ['infos']
])

@section('title', 'Retrouvez toutes nos informations')
@section('content')
@include('infos.section-1')
@endsection
