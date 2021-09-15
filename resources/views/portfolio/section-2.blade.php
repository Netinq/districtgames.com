<section id="part-2">
    <div class="flex">
        <nav>
            <div class="box {{ $portfolio == 0 ? 'green' : 'purple' }}"><h3>Catégories</h3></div>
            <div class="box menu {{ $portfolio == 0 ? 'green' : 'purple' }} ">
                <a href="{{ route('portfolio', $portfolio)}}"
                class="{{ !(isset($category)) ? 'active' : '' }}">Toute(s) catégorie(s)</a>
                @foreach ($categories as $cat)
                    <a
                    href="{{ route('portfolio', [$portfolio, $cat->id])}}"
                    class="{{ $cat->id == $category ? 'active' : '' }}">
                        {{$cat->title}}</a>
                @endforeach
            </div>
        </nav>
        <div id="box-images" class="box box-images {{ $portfolio == 0 ? 'green' : 'purple' }}">
            @foreach ($images as $img)
            <a href="{{ route('image.fetch', $img->id)}}" target="_blank">
                <img class="image" src="{{ route('image.fetch_little', $img->id)}}" alt="">
            </a>
            @endforeach
        </div>
    </div>
</section>
