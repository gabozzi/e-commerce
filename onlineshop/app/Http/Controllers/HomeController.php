<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Users;

Class HomeController extends Controller {
    public function index(){
        return view('home.homepage');
    }
}
?>
