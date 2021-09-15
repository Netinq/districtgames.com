<section id="part-7">
    <div class="content">
        <img id="p7-title"
        src="{{ App::getLocale() != 'fr' ? asset('img/home/part-7/title_en.png') : asset('img/home/part-7/title.png')}}"
        alt="Nos services">
        <div class="p7-sub flex-h">
            <div class="p7-hint-box">
                <img src="{{ asset('img/home/part-7/storm_icon.svg')}}" alt="Storm">
                <h3>@lang('home.realization')</h3>
                <p>@lang('home.realizationtxt')</p>
            </div>
            <div class="p7-hint-box">
                <img src="{{ asset('img/home/part-7/chat_icon.svg')}}" alt="Chat">
                <h3>@lang('home.listening')</h3>
                <p>@lang('home.listeningtxt')</p>
            </div>
            <div class="p7-hint-box">
                <img src="{{ asset('img/home/part-7/palette_icon.svg')}}" alt="Palette">
                <h3>@lang('home.adapted')</h3>
                <p>@lang('home.adaptedtxt')</p>
            </div>
        </div>
        <div class="p7-sub flex-v">
            <div class="p7-line-box line-green">
                <img src="img/logo.png" alt="Logo">
                <h4>District
                <span>Games</span>
                </h4>
                <p>@lang('home.games')</p>
                <img class="star" src="{{ asset('img/home/part-7/star_green.svg')}}" alt="Star">
                <a href="{{route('portfolio', 0)}}">@lang('home.discover') <span>portfolio</span></a>
            </div>
            <div class="p7-line-box line-purple">
                <img src="img/light.png" alt="Logo">
                <h4>District
                <span>Light</span>
                </h4>
                <p>@lang('home.light')</p>
                <img class="star" src="{{ asset('img/home/part-7/star_purple.svg')}}" alt="Star">
                <a href="{{route('portfolio', 1)}}">@lang('home.discover') <span>portfolio</span></a>
            </div>
            <div class="p7-line-box line-yellow">
                <img src="img/agency.png" alt="Logo">
                <h4>District
                <span>Agency</span>
                </h4>
                <p>@lang('home.agency')</p>
                <img class="star" src="{{ asset('img/home/part-7/star_yellow.svg')}}" alt="Star">
                <a href="javascript:void(0);">@lang('home.soon') <img src="{{ asset('img/home/part-7/lock.svg')}}" alt="Lock"></a>
            </div>
        </div>
    </div>
</section>
