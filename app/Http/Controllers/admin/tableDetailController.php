<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\TablePaket;
use App\Models\DetailPaket;
use App\Models\Paket;
use Illuminate\Support\Facades\DB;

class tableDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$detail = DetailPaket::latest()->paginate(5);
        $detail = DB::table('paket_detail')
            ->join('paket', 'paket_detail.id_paket', '=', 'paket.id')
            ->select('paket_detail.*', 'paket.nama_paket')
            ->get();

        $paket = TablePaket::all();


        if (empty(Auth::user()) || Auth::user()->role == 'pelanggan') {
            return redirect()->route('beranda');
        } else {
            return view('admin.tabledetail', compact('detail', 'paket'));
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
        $paket = TablePaket::all();
        return view('admin.tabledetail', compact('paket'));
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
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        DetailPaket::create($input);

        return redirect()->route('table-paketdetail.index')
            ->with('success', 'Detail Paket Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paket = Paket::all();
        $detail = DetailPaket::find($id);
        return view('admin.editdetailpaket', [
            'detail' => $detail,
            'paket' => $paket,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'id_paket' => 'required',
            'nama_paketDetail' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = DetailPaket::findOrFail($id);
        // dd($request->all());

        if ($image = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        $input->update([
            'id_paket' => $request->id_paket,
            'nama_paketDetail' => $request->nama_paketDetail,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $input['foto'],
        ]);

        //$tablePaket->update($input);

        return redirect()->route('table-paketdetail.index')
            ->with('success', 'Detail Paket Updated Successfully');


        //
        /**$request->validate([
            'nama_paket' => 'required',
            'foto' => 'required',
        ]);

        // $tablePaket->update($request->all());
        $paket = TablePaket::findOrFail($id);
        $paket->update([
            'nama_paket' => $request->nama_paket,
            'foto' => $request->foto,
        ]);
        return redirect()->route('tabel-paket.index')
            ->with('success', 'Paket updated successfully');**/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //--------hapus dulu fisik file foto--------
        $paket = DetailPaket::find($id);

        if (!empty($paket->foto)) unlink('image/' . $paket->foto);
        //dd($ruangan);

        $delete = DetailPaket::where('id', $id)->delete();
        return redirect()->back();
        /**$paket = TablePaket::findOrFail($id);
        $paket->delete();

        return redirect()->route('tabel-paket.index')
            ->with('success', 'Detail Paket deleted successfully');*/
    }
}
