<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Transaction as transactionModel;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $transactions = transactionModel::all();
        return view('transactions/index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('transactions/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data=$request->all();
        $data['date']=now();
        transactionModel::query()->create($data);
        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transactionModel $transaction)
    {
        return view('transactions/edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, transactionModel $transaction) : \Illuminate\Http\RedirectResponse
    {
        //
        $transaction->update($request->all());
        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transactionModel $transaction): \Illuminate\Http\RedirectResponse
    {
        //
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}
