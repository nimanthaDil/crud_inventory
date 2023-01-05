<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class CategoryViewController extends Controller
{
    //
    public function index(){
        $category = DB::select('select * from category');
        return view('view_category',['category'=>$category]);
        }
}