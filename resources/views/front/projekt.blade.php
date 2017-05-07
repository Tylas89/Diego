@extends('front')

@section('body')
    <div class="infodiv">PROJEKTY
        <div class="gallpar">
            @foreach($gallery as $id)
                <div class="hov">
                    <a href="{{'images/'.$id->file}}" data-lightbox="{{$id->name}}" data-title="{{$id->name}}">
                        <img class="gallchil" src="{{'images/'.$id->file}}" alt="{{$id->name}}">
                        <div class="overlay">
                            <div class="text">{{$id->name}}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection