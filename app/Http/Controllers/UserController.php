<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'total_budget' => 'required',
        ]);
            print_r('lblb');
        $user = new User;
        $user->user_id = auth()->id(); 
        $user->total_budget = request('total_budget'); 
        $user->save(); 
        
        return redirect()->route('budget.index')->with('success','Budget created'); 
        
    }


     
}
