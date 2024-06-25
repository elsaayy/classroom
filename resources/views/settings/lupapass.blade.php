@extends('main.index')
@section('title', 'Lupa Password')
@section('content')
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Lupa Password</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Kode OTP</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Masukkan kode OTP">
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <form action="{{ route('settings.mailpass') }}" method="POST">
                        @method('post')
                        @csrf
                        <button type="submit" class="border-0 bg-transparent text-primary">Kirim Kode OTP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
