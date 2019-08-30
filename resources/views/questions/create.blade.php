@extends('layout.layout')

@section('content')
    <form action="{{ route('questions.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="Question">Enter your Question</label>
          <input type="text" name="question" class="form-control" id="formGroupExampleInput" placeholder="enter your question">
        </div>
        <button type="submit">Save Question</button>
      </form>
@endsection