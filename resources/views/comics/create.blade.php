@extends('layouts.app')

@section('main_content')
    <h1>Add New Comic</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div>
            <label for="title">Comic Title</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="description">Comic Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="thumb">Comic Image Url</label>
            <input type="text" id="thumb" name="thumb">
        </div>

        <div>
            <label for="price">Comic Price</label>
            <input type="number" id="price" name="price">
        </div>

        <div>
            <label for="series">Comic Series</label>
            <input type="text" id="series" name="series">
        </div>

        <div>
            <label for="sale_date">Comic Sale Date</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>

        <div>
            <label for="type">Comic Type</label>
            <input type="text" id="type" name="type">
        </div>

        <div>
            <input type="submit" value="ADD">
        </div>
    </form>
@endsection