@extends('layouts.app')

@section('main_content')
    <h1>create new product</h1>

    <form action="{{route('thumbs.store')}}" method="post">
        @csrf

        {{-- title --}}
        <div>
            <label for="title">title</label>
            <input type="text" id="title" name="title">
        </div>

        <br>

        {{-- description --}}
        <div>
            <label for="description">description</label>
            <textarea id="description" name="description" cols="30" rows="10"></textarea>
        </div>

        <br>

        {{-- url image --}}
        <div>
            <label for="thumb">url image</label>
            <input type="text" id="thumb" name="thumb">
        </div>

        <br>

        {{-- price --}}
        <div>
            <label for="price">price</label>
            <input type="text" id="price" name="price">
        </div>

        <br>

        {{-- series --}}
        <div>
            <label for="series">series</label>
            <input type="text" id="series" name="series">
        </div>

        <br>

        {{-- sale date --}}
        <div>
            <label for="sale_date">sale date</label>
            <input type="date" id="sale_date" name="sale_date">
        </div>

        <br>

        {{-- type --}}
        <div>
            <label for="type">type</label>
            <input type="text" id="type" name="type">
        </div>

        <br>

        {{-- save product --}}
        <input type="submit" value="save product">
    </form>
@endsection