@extends('layout.layout')

@section('content')
<ul>
    @foreach ($questions as $question)
    <li >
        <a href="/questions/{{$question->id}}">
            <h1>Q{{$question->id}}. {{$question->question}}</h1>
        </a>
    </li>
    @endforeach
</ul>
    
    <a href="questions/create">Add question</a>
@endsection