<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('additional_css')
</head>
<body>

    {{-- Header  --}}
    @include('partials.header', [
        'links' => [
            'characters' => [
                'text' => 'characters',
                'route' => '#'
            ],
            'comics' => [
                'text' => 'comics',
                'route' => 'home'
            ],
            'movies' => [
                'text' => 'movies',
                'route' => '#'
            ],
            'tv' => [
                'text' => 'tv',
                'route' => '#'
            ],
            'games' => [
                'text' => 'games',
                'route' => '#'
            ],
            'collectibles' => [
                'text' => 'collectibles',
                'route' => '#'
            ],
            'videos' => [
                'text' => 'videos',
                'route' => '#'
            ],
            'fans' => [
                'text' => 'fans',
                'route' => '#'
            ],
            'news' => [
                'text' => 'news',
                'route' => '#'
            ],
            'shop' => [
                'text' => 'shop',
                'route' => '#'
            ]
        ]
    ])

    {{-- Content  --}}
    <main>
        @yield('main_content')
    </main>

    {{-- Footer  --}}
    @include('partials.footer')

</body>
</html>