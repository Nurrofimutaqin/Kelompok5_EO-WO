@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <center><H2>CREATE DATA DETAIL PAKET</H2></center>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('table-paketdetail.store') }}" method="POST">
                @csrf

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
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Paket:</strong>
                            <select class="form-control" name="id_paket">
                                <option value="">-- Pilih paket--</option>
                                @foreach($paket as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_paket }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Paket Detail:</strong>
                            <input type="text" name="nama_paketDetail" placeholder="Nama Paket detail" class="form-control" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Harga:</strong>
                            <input type="text" name="harga" placeholder="Harga" class="form-control" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi:</strong>
                            <textarea type="text" name="deskripsi" placeholder="Nama Paket detail" class="form-control" ></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="foto" class="form-label"><strong>Post foto:</strong></label>
                                <input class="form-control " type="file" id="foto" name="foto">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">tambah</button>
                    </div>
                </div>
        
            </form>
        </div>

    </div>
@endsection