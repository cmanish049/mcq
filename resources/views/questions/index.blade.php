@extends('layout.layout')

@section('content')
<ul>
    @foreach ($questions as $question)
    
    <div>
        <li>
            <a href="/questions/{{$question->id}}">
            <div>
                <h1 style="color:black">Q{{$question->id}}. {{$question->question}}</h1>
            </div>
            </a>
        </li>
    </div>
    
    @endforeach
</ul>
    
    <a style="color:white" href="questions/create">Add question</a>
@endsection