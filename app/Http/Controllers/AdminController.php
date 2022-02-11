<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
class AdminController extends Controller
{
    public function user(){
        $users = user::all();

        return view("admin.users", compact("users"));
    }
    
    public function deleteuser($id){

        $user = user::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function foodmenu(){

        $data = food::all();

        return view("admin.foodmenu", compact('data'));
    }
    public function deletemenu($id){

        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id){

        $data = food::find($id);
        
        return view("admin.updateview", compact('data'));
    }
 
    public function update(Request $request, $id){

        $data = food::find($id);
        
        $image= $request->image;
        $imagename = time() . '.' .$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function upload(Request $request){
      $data= new food;
      $image= $request->image;
      $imagename = time() . '.' .$image->getClientOriginalExtension();
      $request->image->move('foodimage', $imagename);
      $data->image = $imagename;
      $data->title = $request->title;
      $data->price = $request->price;
      $data->description = $request->description;
      $data->save();
      return redirect()->back();
    }
}



