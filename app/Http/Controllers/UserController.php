<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\collection;

class UserController extends Controller
{
    //
    function index(){
        // return DB::select("select * from collections");
        $data = collection::all();

        return view('viewall',["data"=>$data]);
    }

    function addData(Request $req){

        $collection  = new collection;
        $collection->title=$req->title;
        $collection->description=$req->description;
        $collection->ingredient=$req->ingredient;
        $collection->nutrition=$req->nutrition;
        $collection->time=$req->time;
        $collection->serving=$req->serving;
        $collection->type=$req->type;
        $collection->save();
        
        return redirect()->back()->withSuccess('Thank you!!! Your Recipe is Added Successfully.');
    }

    function delete($id){
        $del = collection::find($id);
        $del->delete();
        return redirect()->back()->withSuccess('Your Recipe Deleted');

    }

}
