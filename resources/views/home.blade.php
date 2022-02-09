@extends('layouts.app')

@section('page_title')
Home
@endsection

@section('main_content')

    {{-- Banner  --}}
    <section class="banner">
        <div class="container">
            <div class="banner-container">
                <a href="#" class="btn btn-regular btn-blue">current series</a>
            </div>
        </div>
    </section>

    {{-- Comics List  --}}
    <section class="comic-list">
        <div class="container">
            <div class="comic-list-container">

                @foreach ($comics as $comic)
                    @include('components.comic-card', $comic)
                @endforeach

                <a href="#" class="btn btn-wide btn-blue">load more</a>

            </div>
        </div>
    </section>

    {{-- PreFooter  --}}
    <section class="pre-footer">
        <div class="container">
            <div class="pre-footer-container">

                @foreach ($items as $item)
                    
                    {{-- Single Item  --}}
                    <div class="item-box">

                        <!-- Img  -->
                        <img src="{{ '../images/buy-' . $item['img_src'] }}" alt="{{ $item['text'] }}">

                        <!-- Text  -->
                        <div>{{ $item['text'] }}</div>

                    </div>

                @endforeach

            </div>
        </div>
    </section>  


@endsection

