{{-- PAGE CONTENT --}}

@extends('main.index')
@section('title', 'Mengajar')
@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-danger text-white p-3">
                        <div class="card-title">
                            <a href="{{route ('mengajar.detail')}}" class="text-decoration-none text-white">XI RPL 1 P. WEB</a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div>
                        </div>
                    </div>
                    <div class="py-4 card-footer d-flex justify-content-between bg-white p-3"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-success text-white p-3">
                        <div class="card-title">
                            <a href="{{route ('mengajar.detail')}}" class="text-decoration-none text-white">XI RPL 1 AGAMA</a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/2.jpg') }}" alt="Face 1">
                            </div>
                        </div>
                    </div>
                    <div class="py-4 card-footer d-flex justify-content-between bg-white p-3"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-warning text-white p-3">
                        <div class="card-title">
                            <a href="{{route ('mengajar.detail')}}" class="text-decoration-none text-white">XI RPL 1 JAVA</a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/3.jpg') }}" alt="Face 1">
                            </div>
                        </div>
                    </div>
                    <div class="py-4 card-footer d-flex justify-content-between bg-white p-3"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-dark text-white p-3">
                        <div class="card-title">
                            <a href="{{route ('mengajar.detail')}}" class="text-decoration-none text-white">XI RPL 1 MOBILE</a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/7.jpg') }}" alt="Face 1">
                            </div>
                        </div>
                    </div>
                    <div class="py-4 card-footer d-flex justify-content-between bg-white p-3"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-secondary text-white p-3">
                        <div class="card-title">
                            <a href="{{route ('mengajar.detail')}}" class="text-decoration-none text-white">XI RPL 1 PPL</a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/5.jpg') }}" alt="Face 1">
                            </div>
                        </div>
                    </div>
                    <div class="py-4 card-footer d-flex justify-content-between bg-white p-3"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-gray-200 rounded">
                    <div class="card-header bg-primary text-white p-3">
                        <div class="card-title">
                            <a href="{{route ('mengajar.detail')}}" class="text-decoration-none text-white">XI RPL 1 BASIS DATA</a>
                        </div>
                    </div>
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('source/assets/images/faces/5.jpg') }}" alt="Face 1">
                            </div>
                        </div>
                    </div>
                    <div class="py-4 card-footer d-flex justify-content-between bg-white p-3"></div>
                </div>
            </div>
        </section>
    </div>
@endsection