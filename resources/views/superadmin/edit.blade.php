@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">

                      <form action="{{route('superadmin.update', $user->id)}}" method="post">
                        @csrf
                        <div class="card-title">Tambah Pengguna</div>
                          <!-- nama input -->
                          <div class="form-group">
                              <label for="saiz_data">Nama :</label>
                              <input type="text" class="form-control bg-light" id="nama" name="nama" aria-describedby="nama" placeholder="Masukkan Nama Pengguna" value="{{ $user->name }}">
                              <small id="nama" class="form-text text-secondary"></small>
                              @error('nama')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <!-- email input -->
                          <div class="form-group">
                              <label for="email">Email :</label>
                              <input type="text" class="form-control bg-light" id="email" name="email" aria-describedby="email" placeholder="Masukkan Email Pengguna" value="{{ $user->email }}">
                              <small id="email" class="form-text text-secondary"></small>
                              @error('email')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <!-- role input -->
                          <div class="form-group">
                            <label for="role">Peranan :</label>
                              <select id="role" class="custom-select  bg-light" name="role">
                                  <option value="" selected disabled hidden>Pilih Peranan</option>
                                  <option value="4" {{ $user->role == "4" ? 'selected' : '' }}>Super Admin</option>
                                  <option value="0" {{ $user->role == "0" ? 'selected' : '' }}>Pentadbir Sistem</option>
                                  <option value="1" {{ $user->role == "1" ? 'selected' : '' }}>Penyokong 1</option>
                                  <option value="2" {{ $user->role == "2" ? 'selected' : '' }}>Penyokong 2</option>
                                  <option value="3" {{ $user->role == "3" ? 'selected' : '' }}>Ketua Pengarah</option>
                              </select>
                              @error('role')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>

                          <!--kad pengenalan input -->
                          <div class="form-group">
                              <label for="kad_pengenalan">Kad Pengenalan :</label>
                              <input type="text" class="form-control bg-light" name="kad_pengenalan" id="kad_pengenalan" aria-describedby="kad_pengenalan" placeholder="Masukkan Kad Pengenalan" value="{{ $user->kad_pengenalan }}">
                              @error('kad_pengenalan')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <button type="submit" class="btn btn-primary">Tambah</button>

                      </form>
                </div>
            </div>
        </main>
@endsection
