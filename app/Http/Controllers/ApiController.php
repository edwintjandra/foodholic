<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;


class ApiController extends Controller
{
    public function index(){
        $data=Restaurant::all();
        return response()->json(['message'=>'success','data'=>$data]); 
    }

    public function show($id){
        $data=Restaurant::findOrFail($id);
        return response()->json(['message'=>'success','data'=>$data]); 
    }

    public function store(Request $req) {
        $data=Restaurant::create([
            'name'=>$req->name,
            'description'=>$req->description,
        ]);

        $user=Auth::user();
        return response()->json(
            ['message'=>'success','data'=>$data,'user'=>$user]
        ); 
    }

    public function update(Request $req,$id)
    {
        $data=Restaurant::find($id)->update([
            'name'=>$req->name,
            'description'=>$req->description,
        ]);
        
        return response()->json(['message'=>'success','data'=>$data]); 
    }

    public function delete($id){
        Restaurant::destroy($id);
        return response()->json(['message'=>'success']);
    }
}
