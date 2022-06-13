<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TablePaket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TablePaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tablePaket = DB::table('paket')->get();
        return view('admin.tablepaket', ['Paket' => $tablePaket]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tablepaket#primary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_paket' => 'required',
            'logo' => 'required',
        ]);

        TablePaket::create($request->all());

        return redirect()->route('tabel-paket.index')
            ->with('success', 'Paket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TablePaket  $tablePaket
     * @return \Illuminate\Http\Response
     */
    public function show(TablePaket $tablePaket)
    {
        //
        return view('admin.tablepaket_show', compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TablePaket  $tablePaket
     * @return \Illuminate\Http\Response
     */
    public function edit(TablePaket $tablePaket)
    {
        //
        return view('admin.tablepaket#primaryedit', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TablePaket  $tablePaket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TablePaket $tablePaket)
    {
        //
        $request->validate([
            'nama_paket' => 'required',
            'logo' => 'required',
        ]);

        $tablePaket->update($request->all());

        return redirect()->route('tabel-paket.index')
            ->with('success', 'Paket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TablePaket  $tablePaket
     * @return \Illuminate\Http\Response
     */
    public function destroy(TablePaket $tablePaket)
    {
        //
        $tablePaket->delete();

        return redirect()->route('tabel-paket.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }
}
