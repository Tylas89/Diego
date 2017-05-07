@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="ui negative message">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a class="ui primary basic button" href="{{route('categories.create')}}">Dodaj kategorie</a>

    <table class="ui celled table">
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td><a class="ui green basic button" href="{{route('categories.edit', $category)}}">Edycja</a></td>
                    <td>
                        {!! Form::model($categories, ['route' => ['categories.delete', $category], 'method' => 'DELETE']) !!}
                        <button class="ui negative basic button">Usun</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
    </table>

@endsection