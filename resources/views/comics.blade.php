@extends('layouts.app')

@section('content')
    <div class="hero"></div>
    <section class="comics">
        <div class="container">
            <h2>Current series</h2>
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="comic-card">
                            <div class="comic-cover">
                                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                            </div>
                            <div class="comic-title">{{ $comic['series'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="actions">
                <a href="" class="btn-primary">Load more</a>
            </div>
        </div>
    </section>
    <div class="banner">
        <div class="container">
            <div class="row row-cols-6 py-5">
                <div class="col text-center">
                    <div class="wrapper">
                        <img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt="immagine" />
                        <div class="text">digital comics</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="wrapper">
                        <img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt="immagine" />
                        <div class="text">digital comics</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="wrapper">
                        <img src="{{ asset('../img/buy-comics-merchandise.png') }}" alt="immagine" />
                        <div class="text">dc merchandising</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="wrapper">
                        <img src="{{ asset('../img/buy-comics-subscriptions.png') }}" alt="immagine" />
                        <div class="text">subscription</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="wrapper">
                        <img src="{{ asset('../img/buy-comics-shop-locator.png') }}" alt="immagine" />
                        <div class="text">comic shop locator</div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="wrapper">
                        <img src="{{ asset('../img/buy-dc-power-visa.svg') }}" alt="immagine" />
                        <div class="text">dc power visa</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
