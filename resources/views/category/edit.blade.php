@extends('layout.layout')

@section('content')
    <h1 style="color:black">Edit a category</h1>
    <form action="{{ route('category.update',$category->id) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="category">Edit Category</label>
        <input type="text" name="category" value="{{$category->category}}" required>
        @include('partials.errors')
        <button type="submit">Edit Category</button>
    </form>                
@endsection