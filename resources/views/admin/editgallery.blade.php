@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <center><H2>EDIT DATA GALLERY</H2></center>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('table-gallery.update',$gallery->id) }}" method="POST">
                @csrf
                @method('PUT')
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Keterangan:</strong>
                            <input type="text" name="ket" value="{{ $gallery->ket }}" class="form-control" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="gambar" class="form-label"><strong>Post gambar:</strong></label>
                                            <input class="form-control @error('gambar') is-invalid @enderror " type="file"
                                                id="gambar" name="gambar" value="{{ $gallery->gambar }}">
                                            @error('gambar')
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
                    <button type="submit" class="btn btn-primary" name="proses">Edit</button>
                    </div>
                </div>
        
            </form>
        </div>

    </div>
@endsection