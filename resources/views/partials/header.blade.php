<header>
    <div class="containerFD d-flex justify-content-around bg-white">
        <div class="d-flex align-items-center justify-content-center me-5">
            <a class="ms-3" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt="Logo"></a>
        </div>
        <div>
            <ul class="d-flex align-items-center justify-content-center gap-5 list-unstyled  ">
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics' ? 'active' : ''}}"
                        href="{{route('books')}}">
                        Books
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'characters' ? 'active' : ''}}"
                        href="{{route('characters')}}">
                        Characters
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'movies' ? 'active' : ''}}"
                        href="{{route('movies')}}">
                        Movies
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{route('tv')}}">
                        TV
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'games' ? 'active' : ''}}"
                        href="{{route('games')}}">
                        Games
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'collectibles' ? 'active' : ''}}"
                        href="{{route('collectibles')}}">
                        Collectibles
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'videos' ? 'active' : ''}}"
                        href="{{route('videos')}}">
                        Videos
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'fans' ? 'active' : ''}}"
                        href="{{route('fans')}}">
                        Fans
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'news' ? 'active' : ''}}"
                        href="{{route('news')}}">
                        News
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'shop' ? 'active' : ''}}"
                        href="{{route('shop')}}">
                        Shop
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
