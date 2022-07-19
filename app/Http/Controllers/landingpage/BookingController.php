<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser = Auth()->id();
        $Booking = Booking::where('id_user', $idUser)->get();
        // dd($Booking);
        return view('landingpage.booking', compact('Booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth()) {
            $tgl_booking = $request->tgl_booking;
            $idPaket = $request->id;

            Booking::create([
                'id_paketDetail' => $idPaket,
                'id_user' => Auth()->id(),
                'tgl_booking' => $tgl_booking,
                'status' => 'belum bayar',
            ]);

            return redirect()->route('booking')
                ->with('success', 'Booking created successfully.');
        } else {
            return route('landing-login');
        }
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
        $idPaket = $request->id;

        $Booking = Booking::findOrFail($id);
        // dd($request->all());

        if ($image = $request->file('bukti_bayar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['bukti_bayar'] = "$profileImage";
        }

        $Booking->update([
            'bukti_bayar' => $input['bukti_bayar'],
            'status' => 'sudah bayar',
        ]);

        //$tablePaket->update($User);

        return redirect()->route('booking')
            ->with('success', 'Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
