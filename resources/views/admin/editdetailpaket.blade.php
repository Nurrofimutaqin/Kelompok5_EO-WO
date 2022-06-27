@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <center>
                <H2>EDIT DETAIL PAKET</H2>
            </center>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('table-paketdetail.update', $detail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Paket:</strong>
                            <select class="form-control" name="id_paket">
                                <option value="">-- Pilih paket--</option>
                                @foreach ($paket as $p)
                                    @if ($p->id == $detail->id_paket)
                                        <option value="{{ $p->id }}" selected>{{ $p->nama_paket }}</option>
                                    @else
                                        <option value="{{ $p->id }}">{{ $p->nama_paket }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Nama Detail Paket:</strong>
                            <input type="text" name="nama_paketDetail" value="{{ $detail->nama_paketDetail }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>Harga:</strong>
                            <input type="text" name="harga" value="{{ $detail->harga }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>Deskripsi :</strong>
                            <input type="text" name="deskripsi" value="{{ $detail->deskripsi }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="foto" class="form-label"><strong>Post foto:</strong></label>
                            <input class="form-control @error('foto') is-invalid @enderror " type="file" id="foto"
                                name="foto">
                            @error('foto')
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
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
