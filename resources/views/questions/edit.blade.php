@extends('layout.layout')

@section('content')
    <form action="{{ route('questions.update',$question->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="Question">Enter your Question</label>
          <textarea type="text" name="question" class="form-control" id="formGroupExampleInput">{{$question->question}}</textarea>
        </div>
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