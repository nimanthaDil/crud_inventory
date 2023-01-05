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
<h1>Add Categoty</h1>
<form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;">
@csrf <!-- {{ csrf_field() }} -->
<div class="form_ad_category">
    <div class="category_name">
    <label for="fname">Category Name</label>
    <input type="text" id="category_name" name="category_name" placeholder="Enter Categoty Name"> 
    </div>
    <div class="submit_btn">
        <input type="submit" value="Submit">
    </div>
</div>
</form>
@endsection