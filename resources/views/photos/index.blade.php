@extends('layout')

@section('body')

    <a class="ui primary basic button" href="{{route('photos.create')}}">Dodaj zdjęcie</a>

    <table class="ui celled table">
        @foreach($photos as $photo)
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->name}}</td>
                <td>{{$photo->content}}</td>
                {{--<td>{{$photo->category->name}}</td>--}}
                <td><a class="ui green basic button" href="{{route('photos.edit', $photo)}}">Edycja</a></td>
                <td>
                    {!! Form::model($photo, ['route' => ['photos.delete', $photo], 'method' => 'DELETE']) !!}
                    <button class="ui negative basic button">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

@endsection