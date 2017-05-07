@extends('front')

@section('body')
    @foreach($about as $id)
        {!! ($id->content) !!}
    @endforeach
@endsection