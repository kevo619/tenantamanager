<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TenantsController;
use App\Http\Controllers\ExpensesController;
use App\Models\Expense;
use App\Models\Tenant;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $expenses = Expense::sum('amount');
        $date = Expense::where('name', '=', 'Water bill')->pluck('date_added')->toArray();
        $dates = collect($date)->map(function ($item, $key) {
            return date_format(new Carbon($item), 'F Y');;
        })->all();
        $rental = 99000;
        $tenants = Tenant::count();
        $avgexp = Expense::avg('amount');
        $avgrent = $rental/($tenants-1);
        $utilities = Expense::where('category','Utilities')->sum('amount');
        $rates = Expense::where('category','Land Rates')->sum('amount');
        $misc = Expense::where('category','Miscellaneous')->sum('amount');
        return view('dashboard',compact('expenses','utilities','misc','rates','rental','tenants','avgexp','avgrent'));
    }
}
