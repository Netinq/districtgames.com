@section('description', "Illustrez votre jeu, créez un univers à travers une nouvelle une charte graphique unique et moderne.")

<!DOCTYPE html>
<html lang="fr">
    <head>

        <link rel="preload" href="{{asset('img/load.gif')}}" as="image">

        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name='author' content='Quentin Sar, Netinq'>
        <meta name='owner' content='District Games'>
        <meta name='subject' content="District Games">

        <meta name='identifier-URL' content='districtgames.com'>
        <meta name="description" content="@yield('description')">
        <meta name='reply-to' content='districtcorp.private@gmail.com'>

        <meta name='language' content='FR'>
        <meta name='target' content='all'>
        <meta name='theme-color' content='#0d8774'>

        <link rel='shortcut icon' type='image/png' href='{{ asset('img/icon.png') }}'>
        <link rel="apple-touch-icon" href="{{ asset('img/icon.png') }}" />

        <!-- Twitter Card meta -->
        <meta name='twitter:card' content='summary'>
        <meta name="twitter:title" content="@hasSection('title') @yield('title') @else Bienvenue chez DistrictGames @endif" />
        <meta name='twitter:url' content='https://districtgames.com' />
        <meta name='twitter:domain' content='districtgames.com' />
        <meta name="twitter:description" content="@yield('description')" />
        <meta name="twitter:image" content="{{asset('img/meta.jpg')}}" />

        <!-- Open Graph meta -->
        <meta property='og:title' content='@hasSection('title') @yield('title') @else Bienvenue chez DistrictGames @endif' />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:image" content="{{asset('img/meta.jpg')}}" />
        <meta property='og:type' content='website' />
        <meta property='og:url' content='https://bst-fibre.com' />
        <meta property='og:site_name' content='{{Config::get('app.name')}}' />
        <meta property="og:locale" content="fr_FR" />

        <!-- IOS meta -->
        <meta name="apple-mobile-web-app-title" content="{{Config::get('app.name')}}">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "District Games",
                "legalName": "District Games",
                "description": "TODO",
                "image": "https://districtgames.com/img/meta.jpg",
                "logo": "https://districtgames.com/img/logo.png",
                "url": "https://districtgames.com",
                "email": "districtcorp.private@gmail.com"
            }
        </script>

        <title>@hasSection('title') @yield('title') @else Bienvenue chez DistrictGames @endif</title>

        <!-- STATIC Stylesheets -->
        @hasSection('noMaster') @else
            <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/header.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/footer.css') }}">
        @endif

        <!-- STATIC Stylesheets -->
        @hasSection('admin')
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        @endif

        <!-- GENERATE Stylesheet -->
        @if($styles ?? null)
            @foreach($styles as $style)
            <link rel="stylesheet" type="text/css"
            href="{{ asset('css/'.$style.'.css') }}">
            @endforeach
        @endif

        <!-- STATIC Boostrap -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script> --}}

    </head>

    <body class="row">
        <div class="load" id="load"><img src="{{ asset('img/load.gif')}}" alt="Load animation"></div>
        @hasSection('admin') @else @include('layouts.header') @endif
        @yield('content')
        @hasSection('admin') @else @include('layouts.footer') @endif
        <script src="{{ asset('js/header.js')}}"></script>
        <script>
            window.addEventListener("load", function(e) {
                const load = document.getElementById('load');
                var fadeEffect = setInterval( () => {
                    if (!load.style.opacity) load.style.opacity = 1;
                    if (load.style.opacity > 0) {
                        load.style.opacity -= 0.1;
                    } else {
                        load.style.display = "none";
                        clearInterval(fadeEffect);
                    }
                }, 50);
            });
        </script>
    </body>
</html>
