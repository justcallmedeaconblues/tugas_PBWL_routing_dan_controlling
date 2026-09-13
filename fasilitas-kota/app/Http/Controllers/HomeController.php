<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function profil(){
        return view('profil');
    }
    public function tentang(){
        return view('tentang');
    }
}
