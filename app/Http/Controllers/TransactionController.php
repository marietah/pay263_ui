<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model as Eloquent;
use DB;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{
    
    public function index()
    {
        $transaction = Transaction::all();
        return view('transactions.index')->with('transaction', $transaction);
    }
    

    public function filterbyDate(Request $request)
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $transaction = Transaction::whereBetween('transaction_date',[$start_date,$end_date])->get();
        } else {
            $transaction = Transaction::latest()->get();
        }
        
        return view('transactions.index', compact('transaction'));
    }


    public function viewById($id)
    {
        $transaction=Transaction::where('agent_id', 1)->take(1)->get();
        return view('transactions.index')->with('transaction', $transaction);

    }
}
