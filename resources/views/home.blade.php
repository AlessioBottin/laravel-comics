@extends('layouts.app')

@section('page_title')
Home
@endsection

@section('main_content')

    {{-- Banner  --}}
    @include('components.banner')

    {{-- Comics List  --}}
    <section class="comic-list">
        <div class="container">
            <div class="comic-list-container">

                {{-- Title  --}}
                <a href="#" class="title btn btn-regular btn-blue">current series</a>

                {{-- Single comic  --}}
                @foreach ($comics as $comic)
                    @include('components.comic-card', $comic)
                @endforeach

                {{-- Load more  --}}
                <a href="#" class="btn btn-wide btn-blue">load more</a>

            </div>
        </div>
    </section>

    {{-- PreFooter  --}}
    <section class="pre-footer">
        <div class="container">
            <div class="pre-footer-container">

                @foreach ($pre_footer_items as $item)
                    
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

