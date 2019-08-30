@extends('layout.layout')

@section('content')
        <h1>Q{{$question->id}}. {{$question->question}}</h1>
        <a href="{{route ('questions.edit',$question->id)}}">Edit Question</a>
@endsection