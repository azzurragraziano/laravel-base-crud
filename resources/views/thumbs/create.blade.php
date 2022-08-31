@extends('layouts.app')

@section('main_content')
    <h1>create new product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('thumbs.store')}}" method="post">
        @csrf

        {{-- title --}}
        <div>
            <label for="title">title</label>
            <input type="text" id="title" name="title" value="{{old('title')}}">
        </div>

        <br>

        {{-- description --}}
        <div>
            <label for="description">description</label>
            <textarea id="description" name="description" cols="30" rows="10">{{old('description')}}</textarea>
        </div>

        <br>

        {{-- url image --}}
        <div>
            <label for="thumb">url image</label>
            <input type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
        </div>

        <br>

        {{-- price --}}
        <div>
            <label for="price">price</label>
            <input type="text" id="price" name="price" value="{{old('price')}}">
        </div>

        <br>

        {{-- series --}}
        <div>
            <label for="series">series</label>
            <input type="text" id="series" name="series" value="{{old('series')}}">
        </div>

        <br>

        {{-- sale date --}}
        <div>
            <label for="sale_date">sale date</label>
            <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        </div>

        <br>

        {{-- type --}}
        <div>
            <label for="type">type</label>
            <input type="text" id="type" name="type" value="{{old('type')}}">
        </div>

        <br>

        {{-- save product --}}
        <input type="submit" value="save product">
    </form>
@endsection