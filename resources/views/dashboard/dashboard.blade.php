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
                                <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Leni Dwi C.</h5>
                                <h6 class="text-muted mb-0">@lenidwi</h6>
                                <p>Jumlah Siswa : 35</p>
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
                                <h5 class="font-bold">Drs. Shodiqin.</h5>
                                <h6 class="text-muted mb-0">@shodiqin</h6>
                                <p>Jumlah Siswa : 32</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-header bg-warning text-white p-3">
                        <div class="card-title">XI RPL 1 Java</div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/3.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Vebrianti Dwi A.</h5>
                                <h6 class="text-muted mb-0">@vebrianti</h6>
                                <p>Jumlah Siswa : 37</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-header bg-dark text-white p-3">
                        <div class="card-title">XI RPL 1 Mobile</div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/7.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Danang Teguh S.</h5>
                                <h6 class="text-muted mb-0">@danangteguh</h6>
                                <p>Jumlah Siswa : 34</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-white p-3">
                        <div class="card-title">XI RPL 1 PPL</div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/5.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Indah Tri Utami.</h5>
                                <h6 class="text-muted mb-0">@indahutami</h6>
                                <p>Jumlah Siswa : 35</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-header bg-primary text-white p-3">
                        <div class="card-title">XI RPL 1 Basis Data</div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/5.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Indah Tri Utami.</h5>
                                <h6 class="text-muted mb-0">@indahutami</h6>
                                <p>Jumlah Siswa : 30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
