<section id="part-8">
    <div class="content">
        <div id="price" class="box">
            <img src="{{ asset('img/home/part-8/price.png')}}" alt="Price's board" class="board">
            <div class="txt">
                <h3>@lang('home.price')</h3>
                <p>@lang('home.download')</p>
                <a href="{{ isset($tarifs) ? App::getLocale() == 'fr' ? $tarifs->url : $tarifs->url3 : '' }}"
                    target="_blank">
                    @if (App::getLocale() == 'fr')
                    <img src="{{ asset('img/home/part-8/download_districtgames.png')}}" alt="Download button">
                    @else
                    <img src="{{ asset('img/home/part-8/download_districtgames_en.png')}}" alt="Download button">
                    @endif
                </a>
                <a href="{{ isset($tarifs) ? App::getLocale() == 'fr' ? $tarifs->url2 : $tarifs->url4 : '' }}"
                    target="_blank">
                    @if (App::getLocale() == 'fr')
                    <img src="{{ asset('img/home/part-8/download_districtlight.png')}}" alt="Download button">
                    @else
                    <img src="{{ asset('img/home/part-8/download_districtlight_en.png')}}" alt="Download button">
                    @endif
                </a>
            </div>
        </div>
        <div id="joinus" class="box">
            <a href="https://twitter.com/District_Games" target="_blank">
                <img src="{{ asset('img/home/part-8/twitter.png')}}" alt="Twitter link" loading="lazy"></a>
            <a href="https://discord.gg/zPnzmq449d" target="_blank">
                <img src="{{ asset('img/home/part-8/discord.png')}}" alt="Discord link" loading="lazy"></a>
            <a href="https://www.instagram.com/districtgames.off/" target="_blank">
                <img src="{{ asset('img/home/part-8/instagram.png')}}" alt="Instagram link" loading="lazy"></a>
        </div>
    </div>
</section>
