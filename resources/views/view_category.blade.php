@extends('layouts/dash')

@section('content_new')
<h2 class="text-center">View Categories</h2>
<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Name</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($category as $category)
      <tr>
      <td>{{ $category->category_id }}</td>
      <td>{{ $category->category_name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection