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
    <form action="" method="POST">
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
</div>
@endsection
