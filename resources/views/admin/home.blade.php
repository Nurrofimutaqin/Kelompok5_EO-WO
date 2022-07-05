@extends('admin.index')
@section('content')
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="ms-3 name">
                            {{-- <h5 class="font-bold">{{ Auth::user()->name }}</h5> --}}
                            {{-- <h5 class="font-bold"></h5> --}}
                            <h6 class="text-muted mb-0">{{ Auth::user()->role }}</h6>
                        </div>
                        <div class="ms-3 name">
                            <h2>Welcome To Dashboard "{{ Auth::user()->name }}"</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
