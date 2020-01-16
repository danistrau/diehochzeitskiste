<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InspirationController extends Controller
{
   public function show($type)
   {
      $imgs = \Storage::disk('public')->files($type);
      return view("inspirationen.show", [
          'imgs' => $imgs,
            'type' => $type,

          ]);
   }

}
