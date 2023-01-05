<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ItemDeleteController extends Controller
{
    //
    public function index() {
        $users = DB::select('select * from crud_inventory');
        return view('update_item',['item'=>$item]);
     }
    public function destroy($item_id) {
        DB::delete('delete from item where item_id = ?',[$item_id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/view_item">Click Here</a> to go back.';
        }
}
    

?>