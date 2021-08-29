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
    <form action="{{ route('news.store')}}" method="POST" enctype="multipart/form-data">
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
        <h2>Créer un article</h2>
        <div class="form-group">
            <label for="title">Titre de l'article</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content">Contenu de l'article</label>
            <textarea type="text" name="content" class="form-control" id="content"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Ajouter une image</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Publier l'article</button>
        </div>
    </form>
    <hr class="solid">
    <h2>Liste des catégories</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <td>Image</td>
                <td>Titre</td>
                <td>Contenu</td>
                <td>Action(s)</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $new)
            <tr>
                <th>{{$new->id}}</th>
                <td><img src="{{ route('news.fetch_size', [$new->id, 75])}}" alt=""></td>
                <td>{{$new->title}}</td>
                <td>{{$new->content}}</td>
                <td><form action="{{route('news.delete', $new->id)}}" method="POST">@csrf @method("DELETE")
                    <button class="btn btn-danger" type="submit">Supprimer</button></form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
