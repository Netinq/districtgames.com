<header id="header">
    <nav class="web">
        <a href="/portfolio">portfolio</a>
        <a href="/contact">contact</a>
        <a href="/" class="logo"><img src="{{ asset('img/logo-fluid.png')}}" alt="Logo"></a>
        <a href="/boutique">boutique</a>
        <a href="infos">infos</a>
    </nav>
    {{-- <img class="mobile logo" src="{{ asset('img/logo-fluid.png')}}" alt="Logo"> --}}
    <button onclick="showMobile();">
        <img class="mobile burger" src="{{asset('svg/burger.svg')}}" alt="">
    </button>
</header>

<nav class="mobile" id="nav-mobile">
    <a href="/" class="logo"><img src="{{ asset('img/logo-fluid.png')}}" alt="Logo"></a>
    <a href="/portfolio">portfolio</a>
    <a href="/contact">contact</a>
    <a href="/boutique">boutique</a>
    <a href="infos">infos</a>
    <button onclick="showMobile();">
        <img class="mobile close" src="{{asset('svg/close.svg')}}" alt="">
    </button>
</nav>
