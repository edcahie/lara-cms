<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home(){
      return View('home');
    }
    public function About(){
      return View('about');
    }
    public function Contact(){
      return View('tickets/create');
    }

}
