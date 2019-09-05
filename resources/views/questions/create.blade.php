@extends('layout.layout')

@section('content')
    <form action="{{ route('questions.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="question">Enter your Question</label>
          <input type="text" name="question" class="form-control" id="formGroupExampleInput" placeholder="enter your question" required>
            <div>
                <span>Select a category</span>
                <select>
                    <option name="category" value="general">General</option>
                    <option name="category" value="iq">IQ</option>
                    <option name="category" value="geography">Geography</option>
                    <option name="category" value="biology">Biology</option>
                </select>
            </div>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="1" required>
            <input type="text" name="answer[]" placeholder="answer1" required>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="2" required>
            <input type="text" name="answer[]" placeholder="answer2" required>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="3" required>
            <input type="text" name="answer[]" placeholder="answer3" required>
        </div>
        <div>
            <input type="radio" name="correct_answer" value="4" required>
            <input type="text" name="answer[]" placeholder="answer4" required>
        </div>
        @include('partials.errors')
        <button type="submit">Save Question</button>
      </form>
@endsection