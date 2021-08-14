<header id="header">
    <nav class="web">
        <a href="/portfolio">portfolio</a>
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

<nav class="mobile" id="nav-mobile">
    <a href="{{ route('home')}}" class="logo"><img src="{{ asset('img/logo-fluid.png')}}" alt="Logo"></a>
    <a href="/portfolio">portfolio</a>
    <a href="/contact">contact</a>
    <a href="/boutique">boutique</a>
    <a href="{{ route('infos')}}">infos</a>
    <button onclick="showMobile();" class="mobile">
        <img class="mobile close" src="{{asset('svg/close.svg')}}" alt="">
    </button>
</nav>
