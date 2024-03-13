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
</main>

@endsection
