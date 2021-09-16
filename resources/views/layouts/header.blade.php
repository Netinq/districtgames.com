<header id="header" class="{{ Route::is('portfolio') ? 'blue' : '' }}{{ Route::is('contact') ? 'brown' : '' }}">
    <nav class="web">
        <a href="{{ route('portfolio')}}">portfolio</a>
        <a href="{{ route('contact')}}">contact</a>
        <a href="{{ route('home')}}" class="logo"><img src="{{ asset('img/logo-fluid.png')}}" alt="Logo"></a>
        <a href="{{ route('shop')}}">@lang('header.shop')</a>
        <a href="{{ route('infos')}}">infos</a>
    </nav>
    <a id="lang" class="{{ Route::is('portfolio') ? 'blue' : '' }}{{ Route::is('contact') ? 'brown' : '' }}" href="{{ App::getLocale() == 'fr' ? route('lang', 'en') : route('lang', 'fr')}}">
@if (App::getLocale() != 'fr')
<img src="{{ asset('img/FR_2.png')}}" alt="Download button">
@else
<img src="{{ asset('img/ENG_2.png')}}" alt="Download button">
@endif
</a>
    {{-- <img class="mobile logo" src="{{ asset('img/logo-fluid.png')}}" alt="Logo"> --}}
    <button onclick="showMobile();" class="mobile">
        <img class="mobile burger" src="{{asset('svg/burger.svg')}}" alt="">
    </button>
</header>

<nav class="mobile {{ Route::is('portfolio') ? 'blue' : '' }}{{ Route::is('contact') ? 'brown' : '' }}" id="nav-mobile">
    <a href="{{ route('home')}}" class="logo"><img src="{{ asset('img/logo-fluid.png')}}" alt="Logo"></a>
    <a href="{{ route('portfolio')}}">portfolio</a>
    <a href="{{ route('contact')}}">contact</a>
    <a href="{{ route('shop')}}">@lang('header.shop')</a>
    <a href="{{ route('infos')}}">infos</a>
    <a id="lang" class="{{ Route::is('portfolio') ? 'blue' : '' }}{{ Route::is('contact') ? 'brown' : '' }}" href="{{ App::getLocale() == 'fr' ? route('lang', 'en') : route('lang', 'fr')}}">
    @if (App::getLocale() != 'fr')
    <img src="{{ asset('img/FR_2.png')}}" alt="Download button">
    @else
    <img src="{{ asset('img/ENG_2.png')}}" alt="Download button">
    @endif
</a>
    <button onclick="showMobile();" class="mobile">
        <img class="mobile close" src="{{asset('svg/close.svg')}}" alt="">
    </button>
</nav>
