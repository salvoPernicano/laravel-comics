@extends('layouts.app')

@section('title', 'home')


@section('content')
<main>
    <div class="container">
        <span class="currentNews">Current News</span>
        @foreach($comics as $element)
        <div class="card">
            <figure>
                <img src="{{$element['thumb']}}" alt="">
            </figure>
            <h5>{{$element['title']}}</h5>
        </div>
        @endforeach
    </div>
    <button class="load">LOAD MORE</button>
</main>
<section class="mainNavigator">
    <nav>
        <div>
            <figure class="mainNavigatorImg">
                <img  src="{{ Vite::asset('/resources/images/buy-comics-digital-comics.png') }}" alt="logo">
            </figure>
            <span>digital comics</span>
        </div>
        <div>
            <figure class="mainNavigatorImg">
                <img  src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="logo">
            </figure>
            <span>dc merchandise</span>
        </div>
        <div>
            <figure class="mainNavigatorImg">
                <img  src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="logo">
            </figure>
            <span>subscription</span>
        </div>
        <div>
            <figure class="mainNavigatorImg">
                <img  src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="logo">
            </figure>
            <span>comic shop location</span>
        </div>
        <div>
            <figure class="mainNavigatorImg">
                <img  src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="logo">
            </figure>
            <span>dc power visa</span>
        </div>
    </nav>
</section>

@endsection
