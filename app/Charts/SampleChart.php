<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\Expense;
use Carbon\Carbon;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $waterbill = Expense::where('name', '=', 'Water bill')->pluck('amount')->toArray();
        $date = Expense::where('name', '=', 'Water bill')->pluck('date_added')->toArray();
        $dates = collect($date)->map(function ($item, $key) {
            return date_format(new Carbon($item), 'F Y');;
        })->all();
        return Chartisan::build()
            ->labels($dates)
            ->dataset('Water Bill',$waterbill);
    }
}
