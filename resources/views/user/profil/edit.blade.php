@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Update Profil Pengguna</div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="nama" class="text-muted">Nama Penuh</label>
                            <input id="nama" type="text" class="form-control bg-light" name="nama" value="{{ $user->name }}"  readonly>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="kad_pengenalan" class="text-muted">Kad Pengenalan</label>
                            <input id="kad_pengenalan" type="text" class="form-control bg-light" name="kad_pengenalan" value="{{ $user->kad_pengenalan }}"  readonly>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="kerakyatan" class="text-muted">Kerakyatan</label>
                            <input id="kerakyatan" type="text" class="form-control bg-light" name="kerakyatan" value="{{ $user->kerakyatan }}"  readonly>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="tarikh_lahir" class="text-muted">Tarikh Lahir</label>
                            <input id="tarikh_lahir" type="text" class="form-control bg-light" name="tarikh_lahir" value="{{ $user->tarikh_lahir }}"  readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="tempat_lahir" class="text-muted">Tempat Lahir</label>
                            <input id="tempat_lahir" type="text" class="form-control bg-light" name="tempat_lahir" value="{{ $user->tempat_lahir }}"  readonly>
                          </div>
                        </div>
                      </div>

                      <form action="{{route('user.profil.updatePengguna')}}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="alamat_kediaman" class="text-muted">Alamat Kediaman</label>
                              <input id="alamat_kediaman" type="text" class="form-control bg-light" name="alamat_kediaman" value="{{ $user->alamat_kediaman }}"  >
                              @error('alamat_kediaman')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="no_tel_rumah" class="text-muted">No Telefon Rumah</label>
                              <input id="no_tel_rumah" type="text" class="form-control bg-light" name="no_tel_rumah" value="{{ $user->no_tel_rumah }}"  >
                              @error('no_tel_rumah')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="no_tel_bimbit" class="text-muted">No Tel Bimbit</label>
                              <input id="no_tel_bimbit" type="text" class="form-control bg-light" name="no_tel_bimbit" value="{{ $user->no_tel_bimbit }}" >
                              @error('no_tel_bimbit')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="email" class="text-muted">Email</label>
                              <input id="email" type="text" class="form-control bg-light" name="email" value="{{ $user->email }}"  >
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Update Maklumat</button>
                            </div>
                        </div>

                      </form>

                  </div>
                </div>
            </div>
        </main>
@endsection
