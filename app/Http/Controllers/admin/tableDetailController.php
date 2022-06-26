<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\TablePaket;
use App\Models\DetailPaket;

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
            return view('admin.tabledetail', compact('detail','paket'));
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
                        ->with('success','paket detail created successfully.');
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
        $detail = DetailPaket::find($id);
        return view('admin.editdetail',compact('detail'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////--------hapus dulu fisik file foto--------
        $detail = DetailPaket::find($id);

        if(!empty($detail->logo)) unlink('image/'.$detail->logo);
        //dd($ruangan); 
        
        $delete = TablePaket::where('id', $id)->delete();
        return redirect()->route('table-paketdetail.index');

    }
}
