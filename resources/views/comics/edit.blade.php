@extends('layouts.app')

@section('main_content')
    <h1>Edit Comic</h1>

    <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Comic Title</label>
            <input type="text" id="title" name="title" value="{{old('title') ? old('title') : $comic->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Comic Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description') ? old('description') : $comic->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="thumb">Comic Image Url</label>
            <input type="text" id="thumb" name="thumb" value="{{old('thumb') ? old('thumb') : $comic->thumb}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="price">Comic Price</label>
            <input type="number" id="price" name="price" value="{{old('price') ? old('price') : $comic->price}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="series">Comic Series</label>
            <input type="text" id="series" name="series" value="{{old('series') ? old('series') : $comic->series}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="sale_date">Comic Sale Date</label>
            <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic->sale_date}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="type">Comic Type</label>
            <input type="text" id="type" name="type" value="{{old('type') ? old('type') : $comic->type}}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="submit" value="ADD">
        </div>
    </form>
@endsection