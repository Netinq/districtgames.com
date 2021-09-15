<section id="part-2">
    <img class="trans" src="{{asset('img/infos/liaison.png')}}" alt="Lianes">
    <div class="title">
        <h2>Comment
            <span>Commander ?</span>
        </h2>
    </div>
    <div class="tarif">
        <div class="choose">
            <h4>Renseignez-vous sur nos <span>services</span></h4>
            <p>Choissisez le service qui vous correspond.</p>
        </div>
        <div id="price" class="box">
            <h3>@lang('home.price')</h3>
            <p>@lang('home.download')</p>
            <a href="{{ isset($tarifs) ? App::getLocale() == 'fr' ? $tarifs->url : $tarifs->url3 : '' }}" target="_blank"><img src="{{ asset('img/home/part-8/download_districtgames.png')}}" alt="Download button"></a>
            <a href="{{ isset($tarifs) ? App::getLocale() == 'fr' ? $tarifs->url2 : $tarifs->url4 : '' }}" target="_blank"><img src="{{ asset('img/home/part-8/download_districtlight.png')}}" alt="Download button"></a>
        </div>
    </div>
    <div class="presta">
        <div class="p7-sub flex-v">
            <div class="p7-line-box line-green">
                <img src="img/logo.png" alt="Logo">
                <h4>District
                <span>Games</span>
                </h4>
                <p>Optez pour un service client optimal et qualitatif afin de réaliser au mieux vos demandes.</p>
                <img class="star" src="{{ asset('img/home/part-7/star_green.svg')}}" alt="Star">
                <a href="{{route('portfolio', 0)}}">Découvrir <span>portfolio</span></a>
            </div>
            <div class="p7-line-box line-purple">
                <img src="img/light.png" alt="Logo">
                <h4>District
                <span>Light</span>
                </h4>
                <p>Optez pour le meilleur rapport qualité-prix avec un compromis parfait pour développer votre image.</p>
                <img class="star" src="{{ asset('img/home/part-7/star_purple.svg')}}" alt="Star">
                <a href="{{route('portfolio', 1)}}">Découvrir <span>portfolio</span></a>
            </div>
            <div class="p7-line-box line-yellow">
                <img src="img/agency.png" alt="Logo">
                <h4>District
                <span>Agency</span>
                </h4>
                <p>Découvrez notre agence de communication, dévellopez votre identité visuelle à travers nos créations.</p>
                <img class="star" src="{{ asset('img/home/part-7/star_yellow.svg')}}" alt="Star">
                <a href="javascript:void(0);">Prochainement <img src="{{ asset('img/home/part-7/lock.svg')}}" alt="Lock"></a>
            </div>
        </div>
    </div>
    <img id="gauche" src="{{asset('img/infos/gauche.png')}}" alt="Rocher">
    <img id="droite" src="{{asset('img/infos/droite.png')}}" alt="Rocher">
    <img id="liane" src="{{asset('img/infos/liane_2.png')}}" alt="Liane">
</section>
