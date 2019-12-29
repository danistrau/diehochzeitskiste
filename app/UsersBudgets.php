<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersBudgets extends Model
{
    protected $fillable = ['user_id', 'budget_id','price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

}
