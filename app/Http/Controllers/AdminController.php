<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class AdminController extends Controller
{
    public function adminPanel(){
        $restaurants=Restaurant::all();
        return view('restaurant.admin',compact('restaurants'));
    }
}
