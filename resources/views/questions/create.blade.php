@extends('layout.layout')

@section('content')
    <form action="{{ route('questions.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="Question">Enter your Question</label>
          <input type="text" name="question" class="form-control" id="formGroupExampleInput" placeholder="enter your question" required>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="1">
            <input type="text" name="answer[]" placeholder="answer1" required>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="2">
            <input type="text" name="answer[]" placeholder="answer2" required>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="3">
            <input type="text" name="answer[]" placeholder="answer3" required>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="4">
            <input type="text" name="answer[]" placeholder="answer4" required>
        </div>
        @include('partials.errors')
        <button type="submit">Save Question</button>
      </form>
@endsection