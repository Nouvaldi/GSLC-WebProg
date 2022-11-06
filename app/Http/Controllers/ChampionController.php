<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChampionController extends Controller
{
    public function index(){
        $champions = DB::table('champions')->orderBy('name')->get();
        // return var_dump($champions);
        return view('champions', compact('champions'));
    }

    public function idx($name){
        $champions = DB::table('champions')->where('name', $name)->first();
        // $champions = Champion::where('name', $name)->first();
        // return var_dump($champions);
        return view('champion', compact('champions'));
    }
}
