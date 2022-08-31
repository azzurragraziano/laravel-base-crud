@extends('layouts.app')

@section('main_content')
    <h1>products</h1>
    <div>scopri di più cliccando sul nome del prodotto</div>
    <br>

    @foreach ($thumbs as $thumb)
        <div>
            <a href="{{ route('thumbs.show', ['thumb' => $thumb->id]) }}">{{$thumb->title}} - {{$thumb->series}}</a>
        </div>
        <br>
    @endforeach
@endsection