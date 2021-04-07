<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class FetchExpensesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $Expenses = Expense::all()->transform(function($expense){
            return [
                'id' => $expense->id,
                'name' => $expense->name,
                'category' => $expense->category,
                'amount' => $expense->amount,
                'particulars' => $expense->particulars,
                'edit_url' => route('expenses.index', $expense->id)
            ];
        });
        // return view('expenses.index', compact($Expenses));
        return response()->json($Expenses);
    }
}
