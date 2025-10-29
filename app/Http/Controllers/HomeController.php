<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function bouquets()
    {
        return view('categories.bouquets');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function certificates()
    {
        return view('categories.certificates');
    }
    
    public function gifts()
    {
        return view('categories.gifts');
    }
    
    public function promotions()
    {
        return view('categories.promotions');
    }
    
    public function roses()
    {
        return view('categories.roses');
    }
}