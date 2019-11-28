<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = ['user_id', 'title','price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public $budget = [];

    public function addBudget ($budget_id, $quantity = 1) {
        if (isset($this->products[$budget_id])) {
            $this->products[$budget_id] += 1;
        } else {
            $this->products[$budget_id] = $quantity;
        }
    }

    public function removeBudget ($budget_id, $quantity = 'all') {
        if ($quantity === 'all') {
            unset($this->products[$budget_id]);
        } else {
            $this->products[$budget_id] = $this->products[$budget_id] - (int)$quantity;
            if ($this->products[$budget_id] <= 0) {
                unset($this->products[$budget_id]);
            }
        }
    }

    public function updateQuantity ($budget_id, $new_quantity = 1) {
        $this->products[$budget_id] = $new_quantity;
    }
}
