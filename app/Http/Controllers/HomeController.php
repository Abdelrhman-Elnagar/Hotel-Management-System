<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function auth(){
        if (Auth::id()) {
            $userRole=Auth()->user()->role;

            if ($userRole=='admin') {
                return view('dashboard');
            }
            elseif ($userRole=='user') {
                return view('hotel.index');
            }
            else {
                return back();
            }
        };
    }

    public function about(){
    return view('hotel.about-us');
}
    public function blogDetails(){
    return view('hotel.blog-details');
}
    public function blog(){
    return view('hotel.blog');
}
    public function contact(){
    return view('hotel.contact');
}
    public function index(){
    return view('hotel.index');
}
    public function main(){
    return view('hotel.main');
}
    public function roomDetails(){
    return view('hotel.room-details');
}
    public function rooms(){
    return view('hotel.rooms');
}
}
