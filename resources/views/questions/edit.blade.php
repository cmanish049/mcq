@extends('layout.layout')

@section('content')
    <form action="{{ route('questions.update',$question->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="Question">{{$question->question}}</label>
          <textarea type="text" name="question" class="form-control" id="formGroupExampleInput" required>{{$question->question}}</textarea>
        </div>
        @foreach ($question->answers as $index=>$answer)
              <div>
                  <input type="radio" name="correct_answer" value="{{++$index}}" {{ $answer->correct_answer ? 'checked' : '' }}>
                  <input type="text" name="answer[]" value="{{$answer->answer}}" required>
              </div>   
        @endforeach
        
        @include('partials.errors')
        <button type="submit">Update Question</button>
    </form>
    <form action="{{ route('questions.destroy',$question->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <div class="field">
          <div class="control">
            <button class ="btn btn-primary" type="">Delete Question</button>
          </div>
      </div>
  </form>
@endsection