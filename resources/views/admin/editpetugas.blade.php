@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <center>
                <H2>EDIT USER</H2>
            </center>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('table-petugas.update', $User->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mx-4 mt-3">
                            <strong>Nama:</strong>
                            <input type="text" name="name" value="{{ $User->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Email :</strong>
                                <input type="text" name="email" value="{{ $User->email }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Jenis Kelamin :</strong>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="{{ $User->jenis_kelamin }}">{{ $User->jenis_kelamin }}</option>
                                    <option value="laki-laki">laki-laki</option>
                                    <option value="perempuan">perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Role :</strong>
                                <select class="form-control" name="role">
                                    <option value="{{ $User->role }}">{{ $User->role }}</option>
                                    <option value="petugas">petugas</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Password :</strong>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Tulis Ulang Password :</strong>
                                <input type="text" name="password_confirmation" class="form-control">
                            </div>
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
