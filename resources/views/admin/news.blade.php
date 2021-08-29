@extends('layouts.app',
[
    'styles' => ['admin']
])

@section('admin', true)
@section('content')
<div class="wrapper col-10 offset-1">
    @include('admin.nav')
    <form>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </form>
</div>
@endsection
