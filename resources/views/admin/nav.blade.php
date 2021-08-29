@if(session()->has('message'))
<div class="alert alert-info">
    {{ session('message') }}
</div>
@endif
@if(session()->has('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="{{route('home')}}">Site web</a>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.news') }}">News</a>
            </li>
        </ul>
    </div>
</nav>
