@extends('layout.layout')

@section('content')
<ul>
    @foreach ($questions as $question)
    
    <div class="card my-4">
        <li>
            <a href="/questions/{{$question->id}}">
            <div class="card-header">
                <h1>Q{{$question->id}}. {{$question->question}}</h1>
            </div>
            </a>
        </li>
    </div>
    
    @endforeach
</ul>
    
    <a style="color:white" href="questions/create">Add question</a>
@endsection