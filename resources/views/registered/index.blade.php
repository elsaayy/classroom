{{-- PAGE CONTENT --}}

@extends('main.index')
@section('title', 'Terdaftar')
@section('content')
    <div class="page-content">
        @if(session()->has('eror'))
            <div class="col-md-8">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>{{ session('eror') }}</p>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <section class="row">
            @foreach ($datas as $data)
                <div class="col-md-4">
                    <div class="card border-gray-200 rounded">
                        <div class="card-header bg-danger text-white p-3">
                            <div class="card-title">
                                <a href="{{ route('mengajar.detail', $data->id) }}"
                                    class="text-decoration-none text-white">{{ $data->title }}</a>
                            </div>
                        </div>
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl me-2">
                                    <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="logo">
                                </div>
                                <span>{{ $data->teacher }}</span>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-white p-3">
                            <button data-bs-target="#keluar" data-bs-toggle="modal"
                                class="btn btn-outline-danger">Keluar</button>
                            <!-- Modal -->
                            <div class="modal fade" id="keluar" tabindex="-1" aria-labelledby="Keluar"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="Keluar">Keluar</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apa anda yakin ingin meninggalkan kelas?
                                        </div>
                                        <form action="{{ route('registered.delete') }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Keluar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        <div class="btn-plus d-flex justify-content-end">
            <button data-bs-target="#join" data-bs-toggle="modal" class="btn btn-outline-success">Gabung Kelas</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="join" tabindex="-1" aria-labelledby="titlemodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="titlemodal">Bergabung ke kelas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('registered.store') }}" method="post">
                        <div class="modal-body">
                            <div class="row align-items-center">
                                @csrf
                                @method('POST')
                                <label for="" class="col-form-label">Kode Kelas</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="token" placeholder="Masukkan Kode Kelas...." />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Gabung</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
