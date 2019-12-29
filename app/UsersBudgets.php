<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersBudgets extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

}
