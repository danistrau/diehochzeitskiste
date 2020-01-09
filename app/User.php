<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'total_budget',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = [
        'budgets',
    ];

    public function checklist()
    {
    return $this->hasMany(Checklist::class);
    }
    public function blog()
    {
    return $this->hasMany(Blog::class);
    }
    public function budgets()
    {
    return $this->belongsToMany(Budget::class, 'users_budgets')->withPivot('price');
    }
  

    public function getUsedBudgetAttribute(){
        $amount = 0;
        $this->load('budgets');
        foreach($this->budgets as $budget) { 
            $amount += $budget->pivot->price;

        } 
       
        return $amount;
    }

    public function hasBudget(Budget $budget ){
        return $this->budgets->where('id', $budget->id)->count() > 0;
    
    }

    public function getBudget(Budget $budget ){
        return $this->budgets->where('id', $budget->id)->first();
    
    }

}
