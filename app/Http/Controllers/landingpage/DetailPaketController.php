<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Models\DetailPaket;
use App\Models\TablePaket;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $data = DetailPaket::where('id_paket', $id)->get();
        // dd($data);
        return view('landingpage.detailpaket', [
            'idPaket' => $id,
            'allData' => $data,
        ]);
    }

    public function show(Request $request)
    {
        // dd($request->get('min'));
        $idPaket = $request->id;
        $tglBooking = $request->tgl;

        $dataPaketDetail = DetailPaket::where('id_paket', $idPaket)->get();

        $idPaketDetail = []; // ini array ID Paket_Detail yang gaada di booking
        foreach ($dataPaketDetail as $dpd) {
            $data = Booking::where('id_paketDetail', $dpd->id)
                ->where('tgl_booking', $tglBooking)->get();
            if (empty($data[0])) {
                $idPaketDetail[] .= $dpd->id;
            }
        }

        $output = DetailPaket::whereIn('id', $idPaketDetail)->get();
        return $output;
        // dd($output);
        // // return route('paketDetail', ['dataDetail' => $output]);
        // // return route('paketDetail', [
        // //     'dataDetail' => $output,
        // // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tabledetail#primary');
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
            'id_paket' => 'required',
            'nama_paketDetail' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'foto' => 'required',
        ]);
        DetailPaket::create($request->all());
        return redirect()->route('tabel-paketdetail.index')
             ->with('success', 'Paket created successfully.');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailPaket  $detailPaket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $detailPaket = DetailPaket::find($id);
        return view('admin.tabledetail#primarydetail', compact('detailPaket'));
    }

    /**s
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailPaket  $detailPaket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPaket $detailPaket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailPaket  $detailPaket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $tableDetail = DetailPaket::findOrFail($id);
        $tableDetail->delete();

        return redirect()->route('tabel-paketdetail.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }
}
