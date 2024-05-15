{{-- PAGE CONTENT --}}

@extends('main.index')
@section('title', 'Arsip')
@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-danger text-white p-3">
                        <div class="card-title">
                            <a href="#" class="text-decoration-none text-white"></a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                                <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-white p-3">
                        <a href="" class="btn btn-danger m-0">Delete</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection