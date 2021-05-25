<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Expense;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class DemoChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $utilities = Expense::all()->where('category', '=', 'Utilities')->sum('amount');
        $landrates = Expense::all()->where('category', '=', 'Land Rates')->sum('amount');
        $misc = Expense::all()->where('category', '=', 'Miscellaneous')->sum('amount');
        return Chartisan::build()
            ->labels(['Utilities', 'Land rates','Miscellaneous'])
            ->dataset('Expenses', [$utilities,$landrates,$misc]);
    }
}
