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
                    <div class="modal-dialog modal-dialog-centered " role="document">
                        <div class="modal-content modal-dialog-scrollable">
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

                            <form action="{{ route('tabel-paketdetail.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Nama Paket :</strong>
                                            <input type="text" name="id_paket" class="form-control"
                                                placeholder="Nama Paket">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Nama Paket Detail :</strong>
                                            <input type="text" name="nama_paketDetail" class="form-control"
                                                placeholder="Nama Paket">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Harga :</strong>
                                            <input type="text" name="harga" class="form-control"
                                                placeholder="Harga">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Deskripsi :</strong>
                                            <textarea type="text" name="deskripsi" class="form-control"
                                                placeholder="Deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mb-3">
                                            <label for="foto" class="form-label"><strong>Post Logo:</strong></label>
                                            <input class="form-control @error('foto') is-invalid @enderror " type="text"
                                                id="foto" name="foto">
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
                        <th>Nama Paket Detail</th>
                        <th>Deskripsi</th>
                        <th>harga</th>
                        <th>Foto</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tableDetail as $d)
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $d->id_paket }} </td>
                            <td> {{ $d->nama_paketDetail }} </td>
                            <td> {{ $d->deskripsi }} </td>
                            <td> {{ $d->harga }} </td>
                            <td><img src="" class="img-thumbnail" alt="" style="height: 100px;"></td>
                            <td>
                                 <div class="modal-primary me-1 mb-1 d-inline-block">
                                    <!-- Button trigger for primary themes modal -->
                                    <a href="{{ route('tabel-paketdetail.edit',$d->id) }}"type="button" class="btn btn-outline-primary" 
                                    data-bs-toggle="modal" data-bs-target="#primaryedit">Edit</a>

                                    <!--primary theme Modal -->
                                    <div class="modal fade text-left" id="primaryedit" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">
                                                        Edit Data paket
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
                                                            <div class="form-group mx-4 mt-2">
                                                                <strong>Nama Paket :</strong>
                                                                <input type="text" name="nama_paket" class="form-control"
                                                                    value=" {{ $d->id_paket }} ">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group mx-4 mt-2">
                                                                <strong>Nama Paket :</strong>
                                                                <input type="text" name="nama_paket" class="form-control"
                                                                    value=" {{ $d->nama_paketDetail }} ">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group mx-4">
                                                                <strong>Logo:</strong>
                                                                <input type="text" name="logo" class="form-control"
                                                                    value=" {{ $d->deskripsi }} ">
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
                                                        <button type="submit" value="ubahpaket"
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

                                
                                <form method="POST" action="{{ route('tabel-paketdetail.destroy', $d->id) }}">
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger ml-1 mt0" type="button" 
                                        data-bs-toggle="modal" data-bs-target="#hapus">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Hapus</span>
                                    </button>
                                    <div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                    </div>
                                </form>
                                
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
