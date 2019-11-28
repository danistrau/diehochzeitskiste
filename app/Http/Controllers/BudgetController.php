<?php

namespace App\Http\Controllers;

use App\Budget;
use Illuminate\Http\Request;

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

        return view('budget.index', ['budgets' => $budgets]); 

    }

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $budget = new Budget;

        return view('budget.create', ['budget' => $budget]);
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

            'title' => 'required|string|max:255',
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = Budget::findOrFail($id);

        return view('budget.edit', ['budget' => $budget]); 
            
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

            'title' => 'required|string|max:255',
            'price' => 'required',
        ]);

        $budget = Budget::findOrFail($id);
        $budget->fill($request->all());
        $budget->save(); 
        
        return redirect()->route('budget.index')->with('success','Budget updated');
    }

     
}
