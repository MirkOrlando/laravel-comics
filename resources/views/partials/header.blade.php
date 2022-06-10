<header>
    <div class="header-top">
        <div class="container d-flex justify-content-end">
            <div class="visa me-5">Dc power Visa<i class="fa fa-registered"></i></div>
            <div class="sites">additional dc sites <i class="fa fa-chevron-down"></i></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="header-bottom d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="{{ route('homepage') }}">
                        <img class="img-fluid" src="{{ asset('img/dc-logo.png') }}" alt="">
                    </a>
                </div>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('characters') }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tv') }}">Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('games') }}">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('collectibles') }}">Collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('videos') }}">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fans') }}">Fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('shop') }}"
                            role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#tab2Id">Action</a>
                            <a class="dropdown-item" href="#tab3Id">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#tab4Id">Action</a>
                        </div>
                    </li>
                </ul>
                <div class="searchbar">
                    <input type="text" placeholder="Search">
                    <div class="icon">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
