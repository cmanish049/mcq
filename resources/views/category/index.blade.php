@extends('layout.layout')

@section('content')
    <h1>Categories</h1>
    
    <table style="width:100%">
            <tr>
              <th>Categories</th>
              <th>Actions</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->category}}</td>
                <td><a href="{{route('category.edit',$category->id)}}">Edit</a></td>
                <td>
                    <form action="{{route('category.destroy',$category->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete Category </button>
                    </form>
                </td>
            </tr>
            @endforeach
            
          </table>
    <a style="color:white" href="{{route('category.create')}}">Add Category</a>
@endsection