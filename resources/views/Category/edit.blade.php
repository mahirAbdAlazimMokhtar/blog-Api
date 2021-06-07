@extends('layout')
@section('dashboard-content')

<h1>Update Category form</h1>

    @if(Session::get('success'))
    {{Session::get('success')}}
    @endif
    @if(Session::get('Failed'))
    {{Session::get('Failed')}}
    @endif

<!-- //this to store data into CatregoryController -->


<form action="{{URL::to('update-category')}}/{{$category->id}}" method="Post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category name</label>
    <input type="text" class="form-control" value="{{$category->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" name="categoryName">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

@stop
