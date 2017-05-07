@extends('front')

@section('body')
        @foreach($contact as $id)
            {!! ($id->content) !!}
        @endforeach
@endsection