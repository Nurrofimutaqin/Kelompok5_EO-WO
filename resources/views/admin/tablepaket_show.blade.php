@extends('admin.index')
@section('content')
    <tbody>
        @foreach ($Paket as $d)
            <tr>
                <td><?= $no++ ?></td>
                <td> {{ $d->nama_paket }} </td>
                <td> {{ $d->logo }} </td>
            </tr>
        @endforeach
    @endsection
