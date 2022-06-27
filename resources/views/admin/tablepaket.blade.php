@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            Paket
        </div>
        <div class="card-body">
            <a href="{{ url('paket-pdf') }}" type="button" class="btn btn-outline-primary">
                PDF
            </a>
            <div class="modal-primary me-1 mb-1 d-inline-block">
                <!-- Button trigger for primary themes modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#primary">
                    + Tambah Paket
                </button>

                <!--primary theme Modal -->
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel160" aria-hidden="true">
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

                            <form action="{{ route('tabel-paket.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Nama Paket :</strong>
                                            <input type="text" name="nama_paket" class="form-control"
                                                placeholder="Nama Paket">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mb-4">
                                            <label for="logo" class="form-label"><strong>Post Logo:</strong></label>
                                            <input class="form-control @error('logo') is-invalid @enderror " type="file"
                                                id="logo" name="logo">
                                            @error('logo')
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>

                                    <button type="submit" value="tambahpaket" class="btn btn-primary ml-1">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Simpan</span>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $no = 1;
            @endphp
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Logo</th>
                        <th>Foto</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Paket as $d)
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $d->nama_paket }} </td>
                            <td> {{ $d->logo }} </td>
                            <td><img src="{{ asset('image/' . $d->logo) }}" class="img-thumbnail" alt=""
                                    style="height: 100px;"></td>
                            <td>



                                <a href="{{ route('tabel-paket.edit', $d->id) }}" type="button"
                                    class="btn btn-outline-primary">
                                    Edit
                                </a>

                                <a href="/paket-delete/{{ $d->id }}" class="btn btn-danger ml-1 delete-confirm"
                                    role="button">Delete</a>

                                <!--<div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-body">
                                                            Apakah anda ingin menghapus data ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" value="hapuspaket" class="btn btn-danger">Hapus</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
