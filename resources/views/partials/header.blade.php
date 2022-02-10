<header>

    {{-- Top  --}}
    <div class="top">
        <div class="container">
            dc power visa
        </div>
    </div>

    {{-- Nav Menu  --}}
    <nav>
        <div class="container">
            <div class="flex">

                {{-- Logo  --}}
                <div class="logo">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="Dc logo">
                </div>

                {{-- Links  --}}
                <ul>
                    @foreach ($links as $link)
                        <li class="{{ Request::route()->getName() === $link['route'] ? 'active' : '' }}">
                            <a 
                                class="link" 
                                href="{{ $link['route'] === '#' ? '#' : route( $link['route']) }}"
                            >
                                {{ $link['text'] }}
                            </a>
                        </li> 
                    @endforeach
                </ul>
                
            </div>
        </div>
    </nav>

</header>