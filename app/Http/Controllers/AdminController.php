<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
   public function index()
   {
       $users = User::all();

       return view('admin.index', ['users' => $users]);
   }

   public function users()
   {
       $users = User::all();

       return view('admin.index', ['users' => $users]);
   }

  

   
}
