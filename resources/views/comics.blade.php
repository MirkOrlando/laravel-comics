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
@endsection
