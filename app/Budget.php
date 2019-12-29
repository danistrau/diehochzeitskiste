<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Budget extends Model
{
    protected $fillable = ['user_id', 'title','price','total_budget',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function usersBudgets()
    {
    return $this->hasMany(UsersBudgets::class);
    }

    public function hasUserBudget()
    {
        return $this->usersBudgets()->where('user_id', Auth::user()->id)->count()>0;
    }

    public function getUserBudget()
    {
        return $this->usersBudgets()->where('user_id', Auth::user()->id)->first();
    }

}
