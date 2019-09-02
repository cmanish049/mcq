@extends('layout.layout')

@section('content')
<ul>
    @foreach ($questions as $question)
    <li >
        <a href="/questions/{{$question->id}}">
            <h1 style="color:white">Q{{$question->id}}. {{$question->question}}</h1>
        </a>
    </li>
    @endforeach
</ul>
    
    <a style="color:white" href="questions/create">Add question</a>
@endsection