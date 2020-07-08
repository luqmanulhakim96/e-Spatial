@extends('layouts.app_user')

@section('content')
    <div class="login-page d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <!-- <div class="card rounded-sm mt-4 w-50 p-3"> -->
        <div class="card rounded-sm mt-5 w-50 p-3">
        <h5 class="card-header">Borang Pendaftaran Pemohon</h5>
        <div class="card-body">
        <!-- <div class="login-brand m-2 m-md-0 d-flex justify-content-center align-items-center"> -->
            <!-- <img src="{{ asset('qbadminui/img/QbyteIcon.png') }}" alt="image" class="w-25"> -->
            <!-- <img src="{{ asset('qbadminui/img/logo-jpsm_resize.png') }}" alt="image" class="w-10"> -->
        <!-- </div> -->
        <!-- <div class="card-title">Borang Pendaftaran Pemohon</div> -->
        <!-- Create 2 row -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="kategori">Kategori</label>
                      <select id="kategori" class="custom-select  bg-light @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" autofocus>
                            <option value="kementerian">Kementerian</option>
                            <option value="agensi">Agensi</option>
                            <option value="penyelidik">Penyelidik</option>
                            <option value="institut">Institut Pengajian Tinggi</option>
                            <option value="awam">Orang Awam</option>
                            <option value="lain">Lain-lain</option>
                            <option value="dalaman">Dalaman</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Name -->
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="nama" class="text-muted">Nama Penuh</label>
                      <input id="nama" type="text" class="form-control bg-light @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" autocomplete="name" autofocus>
                      @error('nama')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Kad Pengenalan -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kad_pengenalan" class="text-muted">Kad Pengenalan (*nombor sahaja)</label>
                        <input id="kad_pengenalan" type="text" class="form-control bg-light @error('kad_pengenalan') is-invalid @enderror" name="kad_pengenalan" value="{{ old('kad_pengenalan') }}" autocomplete="kad_pengenalan" autofocus>
                        @error('kad_pengenalan')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!-- Kerakyatan -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kerakyatan" class="text-muted">Kerakyatan</label>
                        <select id="kerakyatan" class="custom-select  bg-light @error('kerakyatan') is-invalid @enderror" name="kerakyatan" value="{{ old('kerakyatan') }}" autofocus>
                              <option value="bumiputera">Bumiputera</option>
                              <option value="bukan_bumiputera">Bukan Bumiputera</option>
                          </select>
                        @error('kerakyatan')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- 1st row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tarikh_lahir" class="text-muted">Tarikh Lahir</label>
                        <input id="tarikh_lahir" type="date" class="form-control bg-light @error('tarikh_lahir') is-invalid @enderror" name="tarikh_lahir" value="{{ old('tarikh_lahir') }}" autocomplete="tarikh_lahir" autofocus>
                        @error('tarikh_lahir')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tempat_lahir" class="text-muted">Tempat Lahir</label>
                        <input id="tempat_lahir" type="text" class="form-control bg-light @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" autocomplete="tempat_lahir" autofocus>
                        @error('tempat_lahir')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- 1st row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jawatan" class="text-muted">Jawatan/Gred</label>
                        <input id="jawatan" type="text" class="form-control bg-light @error('jawatan') is-invalid @enderror" name="jawatan" value="{{ old('jawatan') }}" autocomplete="jawatan" autofocus>
                        @error('jawatan')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_perniagaan" class="text-muted">Jenis Perniagaan/Profesion</label>
                        <input id="jenis_perniagaan" type="text" class="form-control bg-light @error('jenis_perniagaan') is-invalid @enderror" name="jenis_perniagaan" value="{{ old('jenis_perniagaan') }}" autocomplete="jenis_perniagaan" autofocus>
                        @error('jenis_perniagaan')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Alamat Kediaman -->
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="alamat_kediaman" class="text-muted">Alamat Kediaman</label>
                      <input id="alamat_kediaman" type="text" class="form-control bg-light @error('alamat_kediaman') is-invalid @enderror" name="alamat_kediaman" value="{{ old('alamat_kediaman') }}" autocomplete="address" autofocus>
                      @error('alamat_kediaman')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Nama Kementerian/Jabatan/Badan Berkanun/Swasta -->
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="nama_kementerian" class="text-muted">Nama Kementerian/Jabatan/Badan Berkanun/Swasta</label>
                      <input id="nama_kementerian" type="text" class="form-control bg-light @error('nama_kementerian') is-invalid @enderror" name="nama_kementerian" value="{{ old('nama_kementerian') }}" autocomplete="nama_kementerian" autofocus>
                      @error('nama_kementerian')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Alamat Kementerian/Jabatan/Badan Berkanun/Swasta -->
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="alamat_kementerian" class="text-muted">Alamat Kementerian/Jabatan/Badan Berkanun/Swasta</label>
                      <input id="alamat_kementerian" type="text" class="form-control bg-light @error('alamat_kementerian') is-invalid @enderror" name="alamat_kementerian" value="{{ old('alamat_kementerian') }}" autocomplete="alamat_kementerian" autofocus>
                      @error('alamat_kementerian')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- No Telefon Rumah -->
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="no_tel_rumah" class="text-muted">No Telefon Rumah (*nombor sahaja)</label>
                      <input id="no_tel_rumah" type="text" class="form-control bg-light @error('no_tel_rumah') is-invalid @enderror" name="no_tel_rumah" value="{{ old('no_tel_rumah') }}" autocomplete="phone" autofocus>
                      @error('no_tel_rumah')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        <!-- Input icon -->
                        <span class="input-icon">
                            <i class="fas fa-phone"></i>
                        </span>
                    </div>
                </div>
                <!-- No Telefon Bimbit -->
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="no_tel_bimbit" class="text-muted">No Telefon Bimbit (*nombor sahaja)</label>
                      <input id="no_tel_bimbit" type="text" class="form-control bg-light @error('no_tel_bimbit') is-invalid @enderror" name="no_tel_bimbit" value="{{ old('no_tel_bimbit') }}" autocomplete="phone" autofocus>
                      @error('no_tel_bimbit')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        <!-- Input icon -->
                        <span class="input-icon">
                            <i class="fas fa-phone"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Create 2 row -->
            <div class="row">
                <!-- Email -->
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="email" class="text-muted">Email</label>
                      <input id="email" type="email" class="form-control bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        <!-- Input icon -->
                        <span class="input-icon">
                            <i class="far fa-envelope"></i>
                        </span>
                    </div>
                </div>
              </div>
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Daftar</button>
        </form>
        </div>
        </div>


    </div>
@endsection
