@extends('layouts.app',
[
    'styles' => ['admin']
])

@section('admin', true)
@section('content')
<div class="wrapper col-10 offset-1">
    @if(session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.news') }}">News</a>
            </li>
        </ul>
    </div>
    </nav>
    <form method="POST" action="{{ route('category.store')}}"  enctype="multipart/form-data">
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
        <h2>Ajouter une catégorie</h2>
        <div class="form-group">
            <label for="title">Titre de la catégorie</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titre de l'image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Ajouter la catégorie</button>
        </div>
    </form>
    <form method="POST" action="{{ route('portfolio.store')}}"  enctype="multipart/form-data">
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
        <h2>Ajouter une image</h2>
        <div class="form-group">
            <label for="title">Titre de l'image</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titre de l'image">
        </div>
        <div class="form-group">
            <label for="portfolio">Portfolio</label>
            <select id="portfolio" class="form-control" name="portfolio">
                <option value=0>DistrictGames</option>
                <option value=1>DistrictLight</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category">Catégorie</label>
            <select id="category" class="form-control" name="category">
                @foreach ($categories as $category)
                    <option value='{{ $category->id }}'>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Ajouter une image</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Ajouter l'image au portfolio</button>
        </div>
    </form>
</div>
@endsection
