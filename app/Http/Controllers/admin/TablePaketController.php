<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\TablePaket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $tablePaket = DB::table('paket')->orderBy('id', 'desc')->get();

        if (empty(Auth::user()) || Auth::user()->role == 'pelanggan') {
            return redirect()->route('beranda');
        } else {
            return view('admin.tablepaket', ['Paket' => $tablePaket]);
        }
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
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
  
        if ($image = $request->file('logo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }
    
        TablePaket::create($input);
     
        return redirect()->route('tabel-paket.index')
                        ->with('success','Product created successfully.');

        //$filename = $request->logo->getClientOriginalName();
        //$logo = $request->logo->storeAs('logo-paket', $filename);



        // TablePaket::create($request->all());
        //TablePaket::create([
        //    'nama_paket' => $request->nama_paket,
        //    'logo' => $logo,
        //]);
        /***  return redirect()->route('tabel-paket.index')
             ->with('success', 'Paket created successfully.');

        /**return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $filename);**/
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
    public function edit($id)
    {
        //
        $paket = TablePaket::find($id);
        return view('admin.editpaket', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TablePaket  $tablePaket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_paket' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = TablePaket::findOrFail($id);

  
        if ($image = $request->file('logo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }else{
            unset($input['logo']);
        }
        $input->update([
            'nama_paket' => $request->nama_paket,
            'logo' => $request->logo,
        ]);
          
        //$tablePaket->update($input);
    
        return redirect()->route('tabel-paket.index')
                        ->with('success','Product updated successfully');


        //
        /**$request->validate([
            'nama_paket' => 'required',
            'logo' => 'required',
        ]);

        // $tablePaket->update($request->all());
        $paket = TablePaket::findOrFail($id);
        $paket->update([
            'nama_paket' => $request->nama_paket,
            'logo' => $request->logo,
        ]);
        return redirect()->route('tabel-paket.index')
            ->with('success', 'Paket updated successfully');**/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TablePaket  $tablePaket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = TablePaket::findOrFail($id);
        $paket->delete();

        return redirect()->route('tabel-paket.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }
}
