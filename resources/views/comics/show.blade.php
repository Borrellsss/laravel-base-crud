@extends('layouts.app')

@section('main_content')
    <h1>Comic Info</h1>

    <div class="comic">
        <div class="comic-title">
            <h3>
                {{$comic['title']}}
            </h3>
        </div>
        <div class="comic-image">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="comic-price">
            <span>
                {{$comic['price'] . '$'}}
            </span>
        </div>
        <div class="comic-series">
            <span>
                {{$comic['series']}}
            </span>
        </div>
        <div class="comic-sale-date">
            <span>
                {{$comic['sale_date']}}
            </span>
        </div>
        <div class="comic-type">
            <span>
                {{$comic['type']}}
            </span>
        </div>
        <div class="comic-description">
            <p>
                {{$comic['description']}}
            </p>
        </div>
    </div>
@endsection