@extends('layouts/dash')
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

@section('content_new')

<h1>Add a new Item</h1>
<form action = "/update_item" method = "post" class="form-group" style="width:70%; margin-left:15%;">
@csrf <!-- {{ csrf_field() }} -->
    <label for="category_id">Category</label>
    <select id="category_id" name="category_id">
    <option selected disabled>Please Select a Category</option>
      <option value="1">Souvenir</option>
      <option value="2">Gift</option>
      <option value="3">Artwork</option>
      <option value="4">Other</option>
    </select>

    <label for="item_name"">Item name</label>
    <input type="text" id="item_name" name="item_name" placeholder="Enter Item name">

    <label for="sku">SKU</label>
    <input type="text" id="sku" name="sku" placeholder="Enter a unique identifier for the item">

    <label for="description">Description</label>
    <input type="text" id="description" name="description" placeholder="Enter a description">

    <label for="item_price">Item price</label>
    <input type="text" id="item_price" name="item_price" placeholder="Enter Item Price">

    <label for="item_count">Item count</label>
    <input type="text" id="item_count" name="item_count" placeholder="Enter Item Count">
    
    <label for="remarks">Remarks</label>
    <textarea id="remarks" name="remarks" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Update">
</form>
@endsection
