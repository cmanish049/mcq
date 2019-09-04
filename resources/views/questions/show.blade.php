@extends('layout.layout')

@section('content')
        <h1 style="color:white">Q{{$question->id}}. {{$question->question}}</h1>
        <a style="color:white"href="{{route ('questions.edit',$question->id)}}">Edit Question</a>
        <div>
            <a style="color:white"href="">Add Answers</a>
        </div>
        

@endsection