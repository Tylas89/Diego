@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="ui negative message">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a class="ui primary basic button" href="{{route('project.create')}}">Dodaj projekt</a>

    <table class="ui celled table">
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->file}}</td>
                    <td><a class="ui green basic button" href="{{route('project.edit', $project)}}">Edycja</a></td>
                    <td>
                        {!! Form::model($project, ['route' => ['project.delete', $project], 'method' => 'DELETE']) !!}
                        <button class="ui negative basic button">Usun</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
        @endforeach
    </table>

@endsection