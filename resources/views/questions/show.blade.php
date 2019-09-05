@extends('layout.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Q{{$question->id}}. {{$question->question}}</h1>
                @foreach ($question->answers as $index=>$answer)
                    <div class="card-body">
                        {{++$index.") ".$answer->answer}}
                        @if ($answer->correct_answer)
                            <i class="fas fa-check text-success"></i>
                        @endif
                    </div>
                @endforeach
            </div>
                <a style="color:white"href="{{route ('questions.edit',$question->id)}}">Edit Question</a>
                <div>
                    <a style="color:white"href="">Add Answers</a>
            </div>
            <form action="{{ route('questions.destroy',$question->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="field">
                    <div class="control">
                      <button class ="btn btn-primary" type="">Delete Question</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
@endsection