<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;

class catController extends Controller
{
    //
    function show(){
        // echo "admin panel";
        return view('admin.cat');

    }

    // function insert(Request $req){
    //  $cat_name = $req->cat_name;
    // //  echo $cat_name;
    //  return view ('admin.cat', compact('cat_name'));
    // }

    function insert(Request $req){
     $cat_name = $req->cat_name;
     $cat_model= new CatModel();
     $cat_model->cat_name=$cat_name;
     $cat_model->save();
     return redirect('firoj');
    }

    function select(){
        $cat_model= new CatModel();
        $all_data=$cat_model->get();
        return view('admin.cat',['data'=>$all_data]);
    }
}
