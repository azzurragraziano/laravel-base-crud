@extends('layouts.app')

@section('main_content')
    <h1>products</h1>
    <div>scopri di più cliccando sul nome del prodotto</div>
    <br>

    @foreach ($thumbs as $thumb)
        <div>
            <a href="{{ route('thumbs.show', ['thumb' => $thumb->id]) }}">{{$thumb->title}} - {{$thumb->series}}</a>
        </div>

        <div>
            <a href="{{ route('thumbs.edit', ['thumb' => $thumb->id]) }}">Edit product</a>
        </div>

        <div>
            <form action="{{ route('thumbs.destroy', ['thumb' => $thumb->id]) }}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete" onClick="return confirm('Are you sure you want to delete this product? ');">
            </form>
        </div>

        <br>
    @endforeach
@endsection