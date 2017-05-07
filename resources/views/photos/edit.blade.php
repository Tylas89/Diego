@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="ui negative message">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($photo, ['route' => ['photos.update',  $photo], 'enctype' => 'multipart/form-data',  'method' => 'PUT']) !!}
    <div class="ui form">
        {!! Form::label('name', 'Dodaj zdjęcie:') !!}
        {!! Form::file('name', ['class'=>'ui form']) !!}
        {!! Html::image('images/'.$photo->name,'kkk',['style'=>'width:200px','height:200px']) !!}
    </div>
    <div class="ui form">
        {!! Form::label('category_id', 'Kategoria:') !!}
        {!! Form::select('category_id', $categories, null, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        {!! Form::label('content', 'Tresc:') !!}
        {!! Form::textarea('content', $photo->content, ['class'=>'ui form']) !!}
    </div>

    <div class="ui form">
        <button class="ui primary button">Zapisz</button>
    </div>
    {!! Form::close() !!}


@endsection