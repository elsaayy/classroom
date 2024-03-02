@extends('main.index')
@section('content')
    <!-- Basic Tables start -->
    <section class="container">
        <div class="row d-flex justify-content-center mb-5" id="basic-table">
            <div class="col-md-10">
                <h2 class="mb-3">Pengajar</h2>
                <hr class="text-warning">
                </hr>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar-md">
                    <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Leni Dwi C.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-2">Teman Sekelas</h2>
                    <span class="mb-2">6 Siswa</span>
                </div>
                <hr class="text-warning">
                </hr>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar my-3">
                    <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Ayundah Bening Tirta A.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar my-3">
                    <img src="{{ asset('source/assets/images/faces/3.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Elza Nur Sabillah.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar my-3">
                    <img src="{{ asset('source/assets/images/faces/2.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Nur Azizah Fatul Aisyah.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar my-3">
                    <img src="{{ asset('source/assets/images/faces/4.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Salsa Bila Rachmawati.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar my-3">
                    <img src="{{ asset('source/assets/images/faces/5.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Siti Affidah Zumaroh.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar my-3">
                    <img src="{{ asset('source/assets/images/faces/6.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Salsa Rachmawati.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center"></div>
                <div class="avatar avatar my-3">
                    <img src="{{ asset('source/assets/images/faces/3.jpg') }}" alt="Face 1">
                    <div class="ms-3 name">
                        <span class="#">Cinta Regina.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
