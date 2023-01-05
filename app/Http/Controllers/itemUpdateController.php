<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ItemUpdateController extends Controller
{
    //
    public function updateform(){
        return view('update_Item');
        }
        public function insert(Request $request){
        $category_id = $request->input('category_id');
        $item_name = $request->input('item_name');
        $sku = $request->input('sku');
        $description = $request->input('description');
        $item_price = $request->input('item_price');
        $item_count = $request->input('item_count');
        $remarks = $request->input('remarks');  
              
       
        $data=array('category_id'=>$category_id,'item_name'=>$item_name,'sku'=>$sku,'description'=>$description,'item_price'=>$item_price,'item_price'=>$item_price,'item_count'=>$item_count,'remarks'=>$remarks,'added_date'=>Carbon::now()->format('Y-m-d H:i:s'));
        DB::table('item')->update($data);
        echo "Record Updated successfully.<br/>";
        echo '<a href = "/view_item">Click Here</a> to go back.';
        }
        }

?>