<?php

namespace App\Http\Controllers;

use App\User;
use App\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
   
   public function inputBudget (Request $request, Budget $budget)
    {
      $user = Auth::user();
      $price = round(floatVal($request->get('price')), 2);

      $user->budgets()->syncWithoutDetaching([$budget->id => ['price' => $price]]);
      $user->load('budgets');
      return [
         'data' => round($user->getBudget($budget)->pivot->price, 2)
      ];
     
      
    }

     
}
