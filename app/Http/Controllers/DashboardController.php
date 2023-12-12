<?php

namespace App\Http\Controllers;

use App\Helpers\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() {
        return view('dashboard');
    }

    public function mulai(Request $request){
        $game = new Game($request->pemain,$request->dadu);
        $game->start();
    }

}
