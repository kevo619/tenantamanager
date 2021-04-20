<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TenantsController;
use App\Http\Controllers\ExpensesController;
use App\Models\Expense;

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
        $expenses = Expense::all()->sum('amount');
        $utilities = Expense::where('category','Utilities')->sum('amount');
        $rates = Expense::where('category','Land rates')->sum('amount');
        $misc = Expense::where('category','Miscellaneous')->sum('amount');
        return view('dashboard',compact('expenses','utilities','misc','rates'));
    }
}
