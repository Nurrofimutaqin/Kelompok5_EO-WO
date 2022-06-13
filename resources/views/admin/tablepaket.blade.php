@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            Paket
        </div>
        <div class="card-body">

            <div class="modal-primary me-1 mb-1 d-inline-block">
                <!-- Button trigger for primary themes modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#primary">
                    + Tambah Paket
                </button>

                <!--primary theme Modal -->
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">
                                    Tambah Paket
                                </h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('tabel-paket.store') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nama Paket :</strong>
                                            <input type="text" name="nama_paket" class="form-control"
                                                placeholder="Nama Paket">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Logo:</strong>
                                            <input type="text" name="logo" class="form-control" placeholder="Logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>

                                    <button type="submit" name="proses" value="tambahpaket" class="btn btn-primary ml-1">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Accept</span>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @php
                $no = 1;
            @endphp
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Logo</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Paket as $d)
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $d->nama_paket }} </td>
                            <td> {{ $d->logo }} </td>
                            <td>

                                <div class="modal-primary me-1 mb-1 d-inline-block">
                                    <!-- Button trigger for primary themes modal -->
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#primaryedit">
                                        Edit
                                    </button>

                                    <!--primary theme Modal -->
                                    <div class="modal fade text-left" id="primaryedit" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">
                                                        Edit
                                                    </h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <strong>Whoops!</strong> There were some problems with your
                                                        input.<br><br>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <form action="{{ route('tabel-paket.update', $d->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Nama Paket :</strong>
                                                                <input type="text" name="nama_paket" class="form-control"
                                                                    value=" {{ $d->nama_paket }} ">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Logo:</strong>
                                                                <input type="text" name="logo" class="form-control"
                                                                    value=" {{ $d->logo }} ">
                                                            </div>
                                                        </div>
                                                        <div>&nbsp;</div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="submit" name="proses" value="ubahpaket"
                                                            class="btn btn-primary ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-info" href="{{ route('tabel-paket.show', $d->id) }}">Show</a>
                                <form method="POST" action="{{ route('tabel-paket.destroy', $d->id) }}">



                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger ml-1" type="submit" name="proses" value="hapuspaket"
                                        onclick="return confirm('Anda Yakin Data dihapus?')">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
