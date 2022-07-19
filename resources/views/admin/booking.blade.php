@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <center><h1>Table Transaksi</h1></center>
        </div>
        @php
            $no = 1;
        @endphp
        <table class="table table-striped" id="datatable1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pemesan</th>
                    <th>Tanggal Booking</th>
                    <th>status</th>
                    <th>bukti_bayar</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booking as $d)
                    <tr>
                        <td> {{ $no++ }} </td>
                        <td> {{ $d->Pemesan->name }} </td>
                        <td> {{ $d->tgl_booking }} </td>
                        <td> {{ $d->status }} </td>
                        <td><img src="{{ asset('image/' . $d->bukti_bayar) }}" class="img-thumbnail" alt=""
                                style="height: 100px;"></td>
                        <td><a href="/booking-delete/{{ $d->id }}" class="btn btn-danger ml-1 delete-confirm"
                                role="button">Batalkan Pesanan</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
