{{-- PAGE CONTENT --}}

@extends('main.index')
@section('title', 'Dashboard')
@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-header bg-danger text-white p-3">
                        <div class="card-title">XI RPL 1 P. WEB</div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/3.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Leni Dwi C.</h5>
                                <h6 class="text-muted mb-0">@lenidwi</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-header bg-success text-white p-3">
                        <div class="card-title">XI RPL 1 Agama</div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/2.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Drs. Shodiqin</h5>
                                <h6 class="text-muted mb-0">@shodiqin</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
