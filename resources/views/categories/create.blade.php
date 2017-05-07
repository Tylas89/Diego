@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="ui negative message">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'categories.store']) !!}
    <div class="ui form">
        {!! Form::label('name', 'Nazwa kategorii:') !!}
        {!! Form::text('name', null, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        <button class="ui primary button">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection