@extends('layout')
@section('dashboard-content')

<h1>Create Category form</h1>

    @if(Session::get('Success'))
    {{Session::get('Success')}}
    @endif
    @if(Session::get('Failed'))
    {{Session::get('Failed')}}
    @endif

<!-- //this to store data into CatregoryController -->


<form action="{{URL::to('post-category-form')}}" method="Post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" name="categoryName">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop
