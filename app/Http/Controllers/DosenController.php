<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_dosen' => 'required|max:50',
            'kode_dosen' => 'required',
        ]);
        $fakultas = Fakultas::create([
            'nama_dosen' => $request->nama_fakultas,
            'kode_dosen' => $request->kode_fakultas,
        ]);

        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fakultas = Fakultas::find($id);
        return view('fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'nama_fakultas' => 'required|max:50',
            'kode_fakultas' => 'required',
        ]);

        $fakultas = Fakultas::findOrFail($id);
        $fakultas->update([
            'nama_fakultas'=> $request->nama_fakultas,
            'kode_fakultas'=> $request->kode_fakultas,
        ]);

        return redirect()->route('fakultas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fakultas = Fakultas::findOrFail($id);

        $fakultas->delete();
        return redirect()->route('fakultas.index');
    }
}