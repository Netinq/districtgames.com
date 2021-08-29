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
    <form method="POST" action="{{ route('category.store')}}" enctype="multipart/form-data">
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
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Ajouter la catégorie</button>
        </div>
    </form>
    <hr class="solid">
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
    <hr class="solid">
    <h2>Liste des catégories</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <td>Titre</td>
                <td>Action(s)</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cat)
            <tr>
                <th>{{$cat->id}}</th>
                <td>{{$cat->title}}</td>
                <td><form action="{{route('category.delete', $cat->id)}}" method="POST">@csrf @method("DELETE")
                    <button class="btn btn-danger" type="submit">Supprimer</button></form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr class="solid">
    <h2>Liste des images</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <td>Image</td>
                <td>Titre</td>
                <td>Portfolio</td>
                <td>Catégorie</td>
                <td>Action(s)</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $img)
            <tr>
                <th>{{$img->id}}</th>
                <td><img src="{{ route('image.fetch_size', [$img->id, 75])}}" alt=""></td>
                <td>{{$img->title}}</td>
                <td>{{$img->portfolio}}</td>
                <td>{{$img->category}}</td>
                <td><form action="{{route('portfolio.delete', $img->id)}}" method="POST">@csrf @method("DELETE")
                    <button class="btn btn-danger" type="submit">Supprimer</button></form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
