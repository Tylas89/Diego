@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="ui negative message">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a class="ui primary basic button" href="{{route('pages.create')}}">Dodaj strone</a>

    <table class="ui celled table">
        @foreach($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
                <td>{{$page->title}}</td>
                <td>{{$page->content}}</td>
                <td><a class="ui green basic button" href="{{route('pages.edit', $page)}}">Edycja</a></td>
                <td>
                    {!! Form::model($page, ['route' => ['pages.delete', $page], 'method' => 'DELETE']) !!}
                    <button class="ui negative basic button">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

@endsection