<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::all();
        return view('incomes.index', ['incomes' => $incomes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incomes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'amount' => 'required|integer',
        'date' => 'required|date',
        'note' => 'required|string',
      ]);

        $income = new Income;
        $income->fill($request->all())->save();

        return redirect('/incomes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    $income = Income::find($id);
    return view('incomes.show', ['income' => $income]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $income = Income::find($id);
    return view('incomes.edit', ['income' => $income]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $income = Income::find($id);
    $income->fill($request->all())->save();
    return redirect('/incomes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $income = Income::find($id);
    $income->delete();
    return redirect('/incomes');
    }
}
