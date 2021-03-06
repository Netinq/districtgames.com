<footer id="footer">
    <div class="box card">
        <img class="logo" src="{{ asset('img/logo-fluid.png')}}" alt="Logo">
        <p>@lang('footer.contact')</p>
        <div class="social">
            <a target="_blank" href="https://twitter.com/District_Games"><img src="{{ asset('svg/twitter.svg')}}" alt=""></a>
            <a target="_blank" href="https://discord.gg/zPnzmq449d"><img src="{{ asset('svg/discord.svg')}}" alt=""></a>
            <a target="_blank" href="https://www.instagram.com/districtgames.off/"><img src="{{ asset('svg/instagram.svg')}}" style="height: 25px" alt=""></a>
        </div>
    </div>
    <div class="box">
        <p class="title">portfolio</p>
        <a href="{{route('portfolio', 0)}}">DistrictGames</a>
        <a href="{{route('portfolio', 1)}}">DistrictLight</a>
    </div>
    <div class="box">
        <p class="title">@lang('footer.legal')</p>
        <a target="_blank" href="{{ route('legal') }}">Mentions Légales</a>
        <a target="_blank" href="{{ route('legal') }}">CGU</a>
        {{-- <a target="_blank" href="/cgv">CGV</a> --}}
    </div>
    <div class="box">
        <p class="title">@lang('footer.price')</p>
        <a href="{{ isset($tarifs) ? App::getLocale() == 'fr' ? $tarifs->url : $tarifs->url3 : '' }}" target="_blank">@lang('footer.fiche') DistrictGames</a>
        <a href="{{ isset($tarifs) ? App::getLocale() == 'fr' ? $tarifs->url2 : $tarifs->url4 : '' }}" target="_blank">@lang('footer.fiche') DistrictLight</a>
    </div>
    <img class="back" src="{{asset('img/logo-purple.png')}}" alt="Purple logo">
</footer>
