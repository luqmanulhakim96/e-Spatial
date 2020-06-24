@extends('layouts.app')

@section('content')
    <div class="login-page d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <div class="card mx-3 mx-md-0 border-0 rounded-lg">
            <div class="card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Left side -->
                    <!-- <div class="col-md-6 border-0 border-md-right"> -->
                    <div class="col-md-12">
                        <!-- Brand -->
                        <div class="login-brand m-3 m-md-0 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('qbadminui/img/QbyteIcon.png') }}" alt="image" class="w-25">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h5 class="text-dark my-3">Sign Up</h5>
                            <!-- Kategori -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select id="kategori" class="custom-select  bg-light @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" required autocomplete="kategori" autofocus>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group mb-2">
                                <label for="kategori" class="text-muted">Kategori</label>
                                <input id="kategori" type="text" class="form-control badge-pill bg-light @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" required autocomplete="kategori" autofocus>
                                @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> -->
                            <!-- Name -->
                            <div class="form-group mb-2">
                                <label for="nama" class="text-muted">Nama Penuh</label>
                                <input id="nama" type="text" class="form-control badge-pill bg-light @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Kad Pengenalan -->
                            <div class="form-group mb-2">
                                <label for="kad_pengenalan" class="text-muted">Kad Pengenalan</label>
                                <input id="kad_pengenalan" type="text" class="form-control badge-pill bg-light @error('kad_pengenalan') is-invalid @enderror" name="kad_pengenalan" value="{{ old('kad_pengenalan') }}" required autocomplete="kad_pengenalan" autofocus>
                                @error('kad_pengenalan')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Kerakyatan -->
                            <div class="form-group mb-2">
                                <label for="kerakyatan" class="text-muted">Kerakyatan</label>
                                <input id="kerakyatan" type="text" class="form-control badge-pill bg-light @error('kerakyatan') is-invalid @enderror" name="kerakyatan" value="{{ old('kerakyatan') }}" required autocomplete="kerakyatan" autofocus>
                                @error('kerakyatan')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Tarikh Lahir -->
                            <div class="form-group mb-2">
                                <label for="tarikh_lahir" class="text-muted">Tarikh Lahir</label>
                                <input id="tarikh_lahir" type="date" class="form-control badge-pill bg-light @error('tarikh_lahir') is-invalid @enderror" name="tarikh_lahir" value="{{ old('tarikh_lahir') }}" required autocomplete="tarikh_lahir" autofocus>
                                @error('tarikh_lahir')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Tempat Lahir -->
                            <div class="form-group mb-2">
                                <label for="tempat_lahir" class="text-muted">Tempat Lahir</label>
                                <input id="tempat_lahir" type="text" class="form-control badge-pill bg-light @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus>
                                @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Jawatan -->
                            <div class="form-group mb-2">
                                <label for="jawatan" class="text-muted">Jawatan/Gred</label>
                                <input id="jawatan" type="text" class="form-control badge-pill bg-light @error('jawatan') is-invalid @enderror" name="jawatan" value="{{ old('jawatan') }}" required autocomplete="jawatan" autofocus>
                                @error('jawatan')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- alamat kediaman -->
                            <div class="form-group mb-2">
                                <label for="alamat_kediaman" class="text-muted">Alamat Kediaman</label>
                                <input id="alamat_kediaman" type="text" class="form-control badge-pill bg-light @error('alamat_kediaman') is-invalid @enderror" name="alamat_kediaman" value="{{ old('alamat_kediaman') }}" required autocomplete="alamat_kediaman" autofocus>
                                @error('alamat_kediaman')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- nama kementerian -->
                            <div class="form-group mb-2">
                                <label for="nama_kementerian" class="text-muted">Nama Kementerian/Jabatan/Badan Berkanun/Swasta</label>
                                <input id="nama_kementerian" type="text" class="form-control badge-pill bg-light @error('nama_kementerian') is-invalid @enderror" name="nama_kementerian" value="{{ old('nama_kementerian') }}" required autocomplete="nama_kementerian" autofocus>
                                @error('nama_kementerian')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- alamat kementerian -->
                            <div class="form-group mb-2">
                                <label for="alamat_kementerian" class="text-muted">Alamat Kementerian/Jabatan/Badan Berkanun/Swasta</label>
                                <input id="alamat_kementerian" type="text" class="form-control badge-pill bg-light @error('alamat_kementerian') is-invalid @enderror" name="alamat_kementerian" value="{{ old('alamat_kementerian') }}" required autocomplete="alamat_kementerian" autofocus>
                                @error('alamat_kementerian')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Jenis Perniagaan -->
                            <div class="form-group mb-2">
                                <label for="jenis_perniagaan" class="text-muted">Jenis Perniagaan/Profesion</label>
                                <input id="jenis_perniagaan" type="text" class="form-control badge-pill bg-light @error('jenis_perniagaan') is-invalid @enderror" name="jenis_perniagaan" value="{{ old('jenis_perniagaan') }}" required autocomplete="jenis_perniagaan" autofocus>
                                @error('jenis_perniagaan')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- No Telefon Rumah -->
                            <div class="form-group mb-2">
                                <label for="no_telefon_rumah" class="text-muted">No Telefon Rumah</label>
                                <input id="no_telefon_rumah" type="text" class="form-control badge-pill bg-light @error('no_telefon_rumah') is-invalid @enderror" name="no_telefon_rumah" value="{{ old('no_telefon_rumah') }}" required autocomplete="no_telefon_rumah" autofocus>
                                @error('no_telefon_rumah')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- No Telefon Bimbit -->
                            <div class="form-group mb-2">
                                <label for="no_telefon_bimbit" class="text-muted">No Telefon Bimbit</label>
                                <input id="no_telefon_bimbit" type="text" class="form-control badge-pill bg-light @error('no_telefon_bimbit') is-invalid @enderror" name="no_telefon_bimbit" value="{{ old('no_telefon_bimbit') }}" required autocomplete="no_telefon_bimbit" autofocus>
                                @error('no_telefon_bimbit')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="form-group mb-2">
                                <label for="email" class="text-muted">Email Address</label>
                                <input id="email" type="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- password -->
                            <div class="form-group mb-2">
                                <label for="password" class="text-muted">Password</label>
                                <input id="password" type="password" class="form-control badge-pill bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-4">
                                <label for="c-pass" class="text-muted">Confirm Password</label>
                                <input id="c-pass" class="form-control badge-pill bg-light" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Sign Up</button>

                        </form>
                    </div>
                    <!-- Right side -->

                    <!-- <div class="col-md-6 d-flex flex-column justify-content-center align-items-center pt-3 pt-md-0">
                        <button class="btn btn-raised btn-google btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-google"></i> <p class="d-inline">Sign in with Google</p></button>
                        <button class="btn btn-raised btn-facebook btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-facebook-f"></i> <p class="d-inline">Sign in with Facebook</p></button>
                        <a href="{{ route('login') }}" class="w-75"><button class="btn btn-primary btn-outline-primary badge-pill btn-block"><p class="d-inline">Sign In</p></button></a>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
@endsection
