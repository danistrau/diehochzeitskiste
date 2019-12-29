<?php

namespace App\Http\Controllers;

use App\Budget;
use App\Http\Requests\StoreBudgetRequest;
use App\UsersBudget;
use App\UsersBudgets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UsersBudgetController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (StoreBudgetRequest $request)
    {
       
        $usersbudget = new UsersBudgets($request->all());
        $usersbudget->user_id = auth()->id(); 
        $usersbudget->save(); 
        
        return redirect()->route('budget.index')->with('success','Budget created'); 
    
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update (StoreBudgetRequest $request, UsersBudgets $usersBudgets)
    {
       
        $usersbudget = new UsersBudgets($request->all());
        $usersbudget->user_id = auth()->id(); 
        $usersbudget->save(); 
        
        return redirect()->route('budget.index')->with('success','Budget created'); 
    
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersBudgets $usersBudgets)
    {
      
        return view('usersBudget.edit', ['usersBudgets' => $usersBudgets]);    
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function create(Budget $budget)
    {
      
        return view('usersBudget.edit', ['budget' => $budget]);    
    }



  
}
