@extends('layouts.app')

@section('main_content')
    <h1>Add New Comic</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div>
            <label for="title">Comic Title</label>
            <input type="text" id="title" name="title" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Comic Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="thumb">Comic Image Url</label>
            <input type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="price">Comic Price</label>
            <input type="number" id="price" name="price" value="{{old('price')}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="series">Comic Series</label>
            <input type="text" id="series" name="series" value="{{old('series')}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="sale_date">Comic Sale Date</label>
            <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="type">Comic Type</label>
            <input type="text" id="type" name="type" value="{{old('type')}}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="submit" value="ADD">
        </div>
    </form>
@endsection