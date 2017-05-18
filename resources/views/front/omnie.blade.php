@extends('front')

@section('body')
    <h1>Tytuł</h1>
    @foreach($about as $id)
        {!! ($id->content) !!}
    @endforeach
@endsection