<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants=Restaurant::all();
        return view('restaurant.index',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $picture_name= $req->file('picture')->getClientOriginalName();
        $req->file('picture')->storeAs('public/images',$picture_name);
        Restaurant::create([
            'name'=>$req->name,
            'description'=>$req->description,
            'picture'=>$picture_name
        ]);

        return redirect('/');
    }

    public function show(Restaurant $restaurant)
    {
        //
    }

   
    public function edit($id)
    {
        $restaurant=Restaurant::find($id);
        return view('restaurant.edit',compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req,$id)
    {
        $picture_name= $req->file('picture')->getClientOriginalName();
        $req->file('picture')->storeAs('public/images',$picture_name);
        Restaurant::find($id)->update([
            'name'=>$req->name,
            'description'=>$req->description,
            'picture'=>$picture_name
        ]);
        
        return redirect('/');
    }

    public function destroy(Request $req,$id)
    {
        $restaurant=Restaurant::findOrFail($id);
        $picture='/storage/images/'.$restaurant->picture;
        $path= str_replace('//','/', public_path());
        unlink($path.$picture);
        Restaurant::destroy($id);

        return redirect('/');
    }
}
