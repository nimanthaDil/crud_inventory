@extends('layouts/dash')

@section('content_new')
<h2 class="text-center">View Products</h2>
<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Category ID</th>
        <th>SKU</th>
        <th>Description</th>
        <th>Item Price</th>
        <th>Item Count</th>
        <th>Added Date</th>
        <th>Remarks</th>
        <th>Update</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
      
    @foreach ($item as $item)

      <tr>
      <td>{{ $item->item_id }}</td>
      <td>{{ $item->item_name }}</td>
      <td>{{ $item->category_id }}</td>
      <td>{{ $item->SKU }}</td>
      <td>{{ $item->description }}</td>
      <td>{{ $item->item_price }}</td>
      <td>{{ $item->item_count }}</td>
      <td>{{ $item->added_date }}</td>
      <td>{{ $item->remarks}}</td>
      <td><a href='update_item/{{ $item->item_id }}'>Update</a></td>
      <td><a href='delete/{{ $item->item_id }}'>Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection