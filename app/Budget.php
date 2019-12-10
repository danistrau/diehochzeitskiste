<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = ['user_id', 'title','price','total_budget',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
