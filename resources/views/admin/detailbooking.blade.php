@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <center><h1>Detail Transaksi {{ $booking->Pemesan->name }}</h1></center>
        </div>
        
        <div class="card-header mx-5">
            
        <table class="table table-striped" id="datatable1">
            <tbody>
                    <tr>
                        <td> Nama Pembooking:  </td>
                        <td> {{ $booking->Pemesan->name }} </td>
                    </tr>
                    <tr>
                        <td> Tanggal Booking:  </td>
                        <td> {{ $booking->tgl_booking }} </td>
                    </tr>
                    <tr>
                        <td> Status:  </td>
                        <td> {{ $booking->status }} </td>
                    </tr>
                    <tr>
                        <td> Bukti Pembayaran:  </td>
                        <td> <img src="{{ asset('image/' . $booking->bukti_bayar) }}" alt="" style="height: 400px;"></td>
                    </tr>
            </tbody>
        </table>
        </div>

    </div>
@endsection