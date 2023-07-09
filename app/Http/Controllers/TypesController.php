<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('types.index', ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = new Type;
        $type->fill($request->all())->save();
        return redirect('/types');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $type = Type::find($id);
        return view('types.show', ['type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type = Type::find($id);
        return view('types.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->fill($request->all())->save();
        return redirect('/types');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect('/types');
    }
}