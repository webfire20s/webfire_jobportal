<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class PosterCategoryController extends Controller
{
    public function index()
    {
      
        return view('admin.poster_categary.index');  
    }


    public function  create(){
        return 'hi';
        return view('admin.poster_categary.create');
    }

    public function  store(Request $request){
        return  $request->all();
    }

    public function   show($id){
        return $id;
    }

    public function   edit($id){
        return $id;
    }
     public function  update(Request $request, $id){

    }

    public  function  destroy($id){
        return $id;
    }

    

}
