<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        $data_player = player::all();

        return view('index',compact('data_player'));
    }
}
