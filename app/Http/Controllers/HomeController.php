<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index(){
        return view('/home');
    }
    public function tentang(){
        return view('/tentang');
    }
    public function berita(){
        return view('/berita');
    }
    public function image(){
        return view('/image');
    }
    public function kontak(){
        return view('/kontak');
    }
    public function login(){
        return view('login');
    }
    public function showRegisterForm()
{
    return view('register');
}

}
