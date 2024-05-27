@extends('main.index')
@section('content')
    <!-- Basic Tables start -->
    <section class="container">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card bg-secondary" style="height: 20rem">
                    <div class="card-body">
                        <div class="align-items-end">
                            <h1 class="text-white mb-2">{{ $datas->title }}</h1>
                            <h5 class="card-text text-white">{{ $datas->teacher }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-3" style="height: 8rem">
                <div class="card">
                    <div class="card-body">
                        <h4 class="pb-4">Kode Kelas</h4>
                        <h3 class="card-text text-warning">{{ $datas->token }}</h3>
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
                        <div class="bg-warning rounded-circle px-4 pb-5 d-flex align-items-center justify-content-center">
                            <i class="bi bi-journal-text pt-2 pe-3 fs-3"></i>
                        </div>
                        <h5 class="card-title ms-4">Elsa Nur Sabillah memposting tugas baru: tugas 1</h5>
                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="#komentar" data-bs-toggle="modal" class="text-warning">{{ count($comments) }} Komentar
                            kelas</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="komentar" tabindex="-1" aria-labelledby="titlemodal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="titlemodal">Komentar Kelas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    @foreach ($comments as $comment)
                                        @foreach ($comment->users as $user)
                                            <p class="fw-bold ms-4 m-0">{{ $user->name }}</p>
                                        @endforeach
                                        <p class="ms-4 m-0">{{ $comment->content }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('comments.store', $datas->id) }}" method="post">
                        <div class="d-flex align-items-center">
                                @csrf
                                @method('POST')
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                                </div>
                                <input class="form-control ms-4" name="content"
                                    placeholder="Tambahkan Komentar Kelas...." />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
@endsection
