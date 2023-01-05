<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class itemViewController extends Controller
{
    //
    public function index(){
        $item = DB::select('select * from item');
        return view('view_item',['item'=>$item]);
        }
}