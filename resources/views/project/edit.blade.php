@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="ui negative message">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($project, ['route' => ['project.update',  $project], 'enctype' => 'multipart/form-data',  'method' => 'PUT']) !!}
    <div class="ui form">
        {!! Form::label('name', 'Nazwa projektu:') !!}
        {!! Form::text('name', $project->name, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        {!! Form::label('file', 'Dodaj zdjęcie:') !!}
        {!! Form::file('file', ['class'=>'ui form']) !!}
        {!! Html::image('images/'.$project->file,'lll',['style'=>'width:200px','height:200px']) !!}
    </div>
    <div class="ui form">
        <button class="ui primary button">Zapisz</button>
    </div>
    {!! Form::close() !!}


@endsection