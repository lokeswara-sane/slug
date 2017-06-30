<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\Services\SlugLibrary;

class DashboardController extends Controller
{
     public function __construct() {
          $User = SlugLibrary::getUser();          
     }
     
     public function index(Request $request){
          
          $this->data['user'] = $User;
          return view('dashboard.index')->with($this->data);
     }
}
