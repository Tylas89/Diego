@extends('layout')

@section('body')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace( 'article-ckeditor' );
        });
    </script>

    @if ($errors->any())
        <ul class="ui negative message">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'pages.store']) !!}
    <div class="ui form">
        {!! Form::label('title', 'Tytuł strony:') !!}
        {!! Form::text('title', null, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        {!! Form::label('content', 'Tresc strony:') !!}
        {!! Form::textarea('content', null, ['class'=>'ui form','id'=> 'article-ckeditor']) !!}
    </div>
    <div class="ui form">
        <button class="ui primary button">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection