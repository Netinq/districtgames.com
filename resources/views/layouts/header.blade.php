<header id="header" class="{{ Route::is('portfolio') ? 'blue' : '' }}">
    <nav class="web">
        <a href="{{ route('portfolio')}}">portfolio</a>
        <a href="/contact">contact</a>
        <a href="{{ route('home')}}" class="logo"><img src="{{ asset('img/logo-fluid.png')}}" alt="Logo"></a>
        <a href="/boutique">boutique</a>
        <a href="{{ route('infos')}}">infos</a>
    </nav>
    {{-- <img class="mobile logo" src="{{ asset('img/logo-fluid.png')}}" alt="Logo"> --}}
    <button onclick="showMobile();" class="mobile">
        <img class="mobile burger" src="{{asset('svg/burger.svg')}}" alt="">
    </button>
</header>

<nav class="mobile {{ Route::is('portfolio') ? 'blue' : '' }}" id="nav-mobile">
    <a href="{{ route('home')}}" class="logo"><img src="{{ asset('img/logo-fluid.png')}}" alt="Logo"></a>
    <a href="{{ route('portfolio')}}">portfolio</a>
    <a href="/contact">contact</a>
    <a href="/boutique">boutique</a>
    <a href="{{ route('infos')}}">infos</a>
    <button onclick="showMobile();" class="mobile">
        <img class="mobile close" src="{{asset('svg/close.svg')}}" alt="">
    </button>
</nav>
