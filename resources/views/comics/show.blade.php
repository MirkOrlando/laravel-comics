@extends('layouts.app')

@section('content')
    <div class="hero"></div>
    <div class="thumb_block">
        <div class="container">
            <div class="thumb">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </div>
        </div>
    </div>
    <section class="comic">

        <div class="comic_top">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>{{ $comic['title'] }}</h2>
                        <div class="details d-flex justify-content-between">
                            <div class="price">U.S. Price: {{ $comic['price'] }}</div>
                            <div class="availability d-flex">
                                <div class="text-uppercase">Availability</div>
                                <button>Check Availability <i class="fa fa-chevron-down"></i></button>
                            </div>
                        </div>
                        <p class="description">
                            {{ $comic['description'] }}
                        </p>
                    </div>
                    <div class="col">
                        <h5 class="text-uppercase text-end">advertisement</h5>
                        <img src="{{ asset('img/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="comic_bottom">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col">
                        <h4>Talent</h4>
                        <div class="artists d-flex">
                            <div class="key">Art by:</div>
                            <div class="values">
                                @forelse ($comic['artists'] as $artist)
                                    <span class="value">{{ $artist }}</span>
                                @empty
                                    nothing to show
                                @endforelse
                            </div>
                        </div>
                        <div class="writers d-flex">
                            <div class="key">Written by:</div>
                            <div class="values">
                                @forelse ($comic['writers'] as $writer)
                                    <span class="value">{{ $writer }}</span>
                                @empty
                                    nothing to show
                                @endforelse
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <h4>Specs</h4>
                        <div class="series d-flex">
                            <div class="key">Series:</div>
                            <div class="values">
                                <span class="value">{{ $comic['series'] }}</span>
                            </div>
                        </div>
                        <div class="price d-flex">
                            <div class="key">U.S. Price:</div>
                            <div class="values">
                                <span class="value">{{ $comic['price'] }}</span>
                            </div>
                        </div>
                        <div class="sale_date d-flex">
                            <div class="key">Pn Sale Date:</div>
                            <div class="values">
                                <span class="value">{{ $comic['sale_date'] }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
    @include('partials.banner')
@endsection
