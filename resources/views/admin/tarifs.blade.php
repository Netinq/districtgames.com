@extends('layouts.app',
[
    'styles' => ['admin']
])

@section('admin', true)
@section('content')
<div class="wrapper col-10 offset-1">
    @include('admin.nav')
    <hr class="solid">
    <h1>Bienvenue sur le panneau d'administration</h1>
    <hr class="solid">
    <form action="{{ route('tarif.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>Modifier les tarifs</h2>
        <div class="form-group">
            <label for="url">DistrictGames</label>
            <input type="url" name="url" class="form-control" id="url" value="{{ isset($tarifs) ? $tarifs->url : '' }}">
        </div>
        <div class="form-group">
            <label for="url3">DistrictGames ANGLAIS</label>
            <input type="url" name="url3" class="form-control" id="url3" value="{{ isset($tarifs) ? $tarifs->url3 : '' }}">
        </div>
        <div class="form-group">
            <label for="url2">DistrictLight</label>
            <input type="url" name="url2" class="form-control" id="url2" value="{{ isset($tarifs) ? $tarifs->url2 : '' }}">
        </div>
        <div class="form-group">
            <label for="url4">DistrictLight ANGLAIS</label>
            <input type="url" name="url4" class="form-control" id="url4" value="{{ isset($tarifs) ? $tarifs->url4 : '' }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Modifier</button>
        </div>
    </form>
</div>
@endsection
