<section id="part-1">
    <div class="title">
        <h2>@lang('home.contact')</h2>
    </div>
    <div class="pan">
        <img class="stick" src="{{asset('img/contact/stick.png')}}" alt="">
        <a href="https://twitter.com/District_Games" target="_blank"><img src="{{asset('img/contact/twitter.png')}}" alt=""></a>
        <a href="https://www.instagram.com/districtgames.off/" target="_blank"><img src="{{asset('img/contact/insta.png')}}" alt=""></a>
        <a href="mailto:districtcorp.private@gmail.com" target="_blank">
            @if (App::getLocale() == 'fr')
            <img src="{{asset('img/contact/email.png')}}" alt="">
            @else
            <img src="{{asset('img/contact/email_en.png')}}" alt="">
            @endif
        </a>
    </div>
    <div class="discord">
        <img src="{{asset('img/contact/discord.png')}}" alt="">
    </div>
    <img id="chat" src="{{ asset('img/infos/chat.png')}}" alt="">
</section>
