@extends('layouts.app')

@section('main_content')

    <h1>{{ $thumb->title }}</h1>

    <div>
        <img src="{{$thumb->thumb}}" alt="{{$thumb->title}}">
    </div>
    
    <div>Description: 
        <p>
            {{ $thumb->description}}
        </p>
    </div>

    <div>Price: {{ $thumb->price}}</div>

    <div>Series: {{$thumb->series}}</div>

    <div>Sale date {{$thumb->sale_date}}</div>

    <div>Type {{$thumb->type}}</div>

@endsection