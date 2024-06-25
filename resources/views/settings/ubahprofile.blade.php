@extends('main.index')
@section('title', 'Ubah Profile')
@section('content')
    <div class="col-md-12 col-12">
        <h4 class="card-title text-center mb-4">Ubah Profile</h4>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="{{ route('settings.updateprofile') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama" name="name"
                                    class="form-control @error('nama') is invalid
                                        
                                    @enderror"
                                    value="{{ old('nama', $user->name) }}" placeholder="Nama">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="email" name="email"
                                    class="form-control @error('email') is invalid          
                                    @enderror"
                                    value="{{ old('email', $user->email) }}" placeholder="Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Foto Profile</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="file" id="image"
                                    class="form-control @error('image') is invalid
                                    @enderror"
                                    name="image" value="{{ old('image', $user->image) }}">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Ubah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
