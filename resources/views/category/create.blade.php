@extends('layout.layout')

@section('content')
    <h1 style="color:black">Add a category</h1>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <label for="category">Add Category</label>
        <input type="text" name="category" placeholder="Add Category" required>
        @include('partials.errors')
        <button type="submit">Add Category</button>
    </form>                
    <a style="color:black" href="">Edit Category</a>
@endsection