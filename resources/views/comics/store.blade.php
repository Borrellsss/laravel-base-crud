@extends('layouts.app')

@section('main_content')
    <div>OPERATION COMPLETED</div>
    <a href="{{route('comics.show', ['comic' => $comic])}}">Show Comic</a>
@endsection