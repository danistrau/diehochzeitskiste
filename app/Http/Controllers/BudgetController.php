<?php

namespace App\Http\Controllers;

use App\Budget;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::all();

        $total_budget = User::where("id", Auth::id())->first()->total_budget;
        $amount = 0;

        foreach($budgets as $budget) { 
            
            $price = $budget->price;
            $amount += $price;
            
        } 

        $rest_budget = $total_budget - $amount;
        $rest_budget = round($rest_budget, 2);

        return view('budget.index', ['budgets' => $budgets, "total_budget" => $total_budget, "rest_budget" => $rest_budget ]); 
    }

    public function mainstore(Request $request)
    {
        $this->validate($request, [

            'total_budget' => 'required',
        ]);
           
        $users = Auth::user();
        $users->total_budget = request('total_budget'); 
        $users->save(); 
        
        return redirect()->route('budget.index')->with('success','Budget created');  
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
    
        $budget = new Budget($request->all());
        $budget->user_id = auth()->id(); 
        $budget->save(); 
        
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
        $budget = Budget::findOrFail($id);

        return view('budget.show', ['budget' => $budget]); 
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
        $this->validate($request, [

            'price' => 'required',
        
        ]);

        $budget = Budget::findOrFail($id);
        $budget->fill($request->all());
        $budget->save(); 
        
        return redirect()->route('budget.index')->with('success','Budget updated');
    }

 

     
}
