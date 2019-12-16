<?php

namespace App\Http\Controllers;

use App\Budget;
use App\User;
use App\UsersBudget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UsersBudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $usersbudget = Budget::where("user_id", Auth::user()->id)->get();

       return view('budget.index', ['usersbudget' => $usersbudget]); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'price' => 'required',
            
        ]);
    
        $usersbudget = new UsersBudget($request->all());
        $usersbudget->user_id = auth()->id(); 
        $usersbudget->save(); 
        
        return redirect()->route('budget.index')->with('success','Budget created'); 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersbudget = UsersBudget::findOrFail($id);

        return view('budget.show', ['usersbudget' => $usersbudget]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
  
}
