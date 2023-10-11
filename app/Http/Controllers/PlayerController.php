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
    public function store(Request $request){
        $player= new player;
        $player->player_name=$request->player_name;
        $player->position=$request->position;
        $player->no_punggung=$request->no_punggung;
        $player->save();
        return redirect('/index');
    }

    public function create(){
        return view('addplayer');
    }
    public function update(Request $request, $id,$player_name){
        $player = player::find($id);

    if (!$player) {
        return redirect('/index');
    }
    $player->player_name = $player_name;
    $player->save();
    return redirect('/index');
    }
    public function destroy($id){
        $player= player::where('id', $id);
        $player->delete();
        return redirect('/index');
    }
}
