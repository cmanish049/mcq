@extends('layout.layout')

@section('content')
<ul class="question-index">
    @foreach ($questions as $question)
    <div>
        <li>
            <a href="/questions/{{$question->id}}">
            <div>
                <p>Q{{$question->id}}. {{$question->question}}</p>
            </div>
            </a>
        </li>
    </div>
    
    @endforeach
</ul>
    
    <a style="color:white" href="questions/create">Add question</a>
@endsection