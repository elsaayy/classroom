@extends('main.index')
@section('content')
    <!-- Basic Tables start -->
    <section class="container">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card bg-secondary text-white" style="height: 20rem">
                    <div class="card-body">
                        <div class=" align-items-end">
                            <h1 class="mb-2">XI RPL 1</h1>
                            <h5 class="card-text">Leni Dwi C.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-3" style="height: 8rem">
                <div class="card">
                    <div class="card-body">
                        <h4 class="pb-4">Kode Kelas</h4>
                        <h3 class="card-text text-warning">z6qdrh4.</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                        </div>
                        <input class="form-control ms-4" placeholder="Umumkan sesuatu kepada kelas Anda" />
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="height: 8rem">
                <div class="card">
                    <div class="card-body">
                        <h4 class="pb-4">Mendatang</h4>
                        <p class="card-text">Tidak ada tugas yang perlu segera diselesaikan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-0">
                <div class="card h-100">
                    <div class="card-body d-flex align-items-center">
                            <i class="bi bi-journal-text bg-warning rounded-circle p-4 fs-4"></i>
                        <h5 class="card-title">Elsa Nur Sabillah memposting tugas baru: tugas 1</h5>
                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="" class="link"> 1 komentar kelas</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
