@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <center>
                <H2>EDIT PAKET</H2>
            </center>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('tabel-paket.update', $paket->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Paket:</strong>
                            <input type="text" name="nama_paket" value="{{ $paket->nama_paket }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="logo" class="form-label"><strong>Post logo:</strong></label>
                            <input class="form-control @error('logo') is-invalid @enderror " type="file" id="logo"
                                name="logo">
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
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
