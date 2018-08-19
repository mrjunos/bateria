<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    /*public function __construct() { $this->middleware('auth'); }*/

    public function start()
    {
        if(Auth::check()){
            $user = Auth::user();
            return redirect()->route('index', compact('user'));
        }else{
            return redirect()->route('login');
        }
    }
    
    public function index($user) {
        
        $user = DB::table('users')->where('id', $user)->first();

        if($user != null){ return view('inicio', compact('user')); }
        else{ abort(404); }
    }
}
