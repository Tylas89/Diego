@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'photos.store', 'enctype' => 'multipart/form-data']) !!}
    <div class="ui form">
        {!! Form::label('name', 'Dodaj zdjęcie:') !!}
        {!! Form::file('name', null, ['class'=>'ui form']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id', 'Kategoria:') !!}
        {!! Form::select('category_id', $photos, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Tresc:') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection