<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryInsertController extends Controller
{
    //
    public function insertform(){
        return view('add_category');
        }
        public function insert(Request $request){
        $category_name = $request->input('category_name');
        $data=array('category_name'=>$category_name);
        DB::table('category')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add_category">Click Here</a> to go back.';
        }
        }

?>