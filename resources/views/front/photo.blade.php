@extends('front')

@section('body')
    <div class="infodiv">FOTOGRAFIA

         <div class="cate">

             @foreach($cate as $id)
                 <a class="ui black basic button" href="{{route('front.bycategory', $id)}}">{{$id->name}}</a>
             @endforeach
         </div>

        <div class="photoimg">
            @foreach($photo as $id)
                <a href="{{'images/'.$id->name}}" data-lightbox="{{$id->name}}" data-title="{{$id->name}}">
                    <img class="photoimg" src="{{'images/'.$id->name}}" alt="{{$id->name}}">
                </a>
                <div class="photocont">
                    {{$id->content}}
                </div>
            @endforeach
        </div>
    </div>


@endsection