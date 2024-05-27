{{-- PAGE CONTENT --}}

@extends('main.index')
@section('title', 'Mengajar')
@section('content')
    <div class="page-content">
        <section class="row">
            @foreach ($datas as $data)
                <div class="col-md-4">
                    <div class="card border-gray-200 rounded">
                        <div class="card-header bg-danger text-white p-3">
                            <div class="card-title">
                                <a href="#" class="text-decoration-none text-white">{{ $data->title }}</a>
                            </div>
                        </div>
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl me-2">
                                    <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                                </div>
                                <span>{{ $data->teacher }}</span>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-white p-3">
                            <button type="submit" class="btn btn-success m-0" data-bs-toggle="modal"
                                data-bs-target="#modalHapus{{$data->id}}">Kembalikan</button>
                            <button type="submit" class="btn btn-danger m-0" data-bs-toggle="modal"
                                data-bs-target="#modalHapus{{$data->id}}">Hapus</button>
                            
                        </div>
                    </div>
                </div>
                {{-- Modal --}}
                <div class="modal fade" id="modalHapus{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin ingin menghapus data?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Batal"></button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('archive.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        
    </div>
@endsection
