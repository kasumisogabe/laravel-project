<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpendingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spendings = Spending::all();
        return view('spendings.index', ['spendings' => $spendings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spendings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $spending = new Spending;
        $spending->fill($request->all())->save();
        return redirect('/spendings');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    $spending = Spending::find($id);
    return view('spendings.show', ['spending' => $spending]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $spending = Spending::find($id);
    return view('spendings.edit', ['spending' => $spending]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $spending = Spending::find($id);
    $spending->fill($request->all())->save();
    return redirect('/spendings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $spending = Spending::find($id);
    $spending->delete();
    return redirect('/spendings');
    }
}
