@extends('layouts.app',
[
    'styles' => ['admin']
])

@section('admin', true)
@section('content')
<div class="wrapper col-6 offset-3" style="margin-top: 150px">
<form class="form-signin" method="POST" action="{{ route('admin.check')}}">
    @csrf
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
</form>
</div>
@endsection
