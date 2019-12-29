<?php

use App\Budget;
use Illuminate\Database\Seeder;

class BudgetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $budgets = [
            'Location & Catering',
            'Unterhaltung, Musik, Video',
            'Mode, Schmuck, Make-up',
            'Blumen & Deko',
            'Sonstiges',
        ];

        foreach( $budgets as $budget){
            (new Budget())->create([
                'title' => $budget
                ]);
        };
    }
    
}
