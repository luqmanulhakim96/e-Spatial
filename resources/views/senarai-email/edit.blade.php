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
                      <form action="{{route('senarai-email.update', $info->id)}}" method="post" id="senarai_email_submit">
                        @csrf
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card-title">Edit Templat Email</div>
                              <!--jumlah harga input -->
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="jenis">Jenis</label>
                                          <select id="jenis" class="custom-select  bg-light @error('jenis') is-invalid @enderror" name="jenis" value="{{ $info->jenis }}" autofocus>
                                                <option value="permohonan_baru" {{ $info->jenis == "permohonan_baru" ? 'selected' : '' }}>Permohonan Baru</option>
                                                <option value="permohonan_lulus" {{ $info->jenis == "permohonan_lulus" ? 'selected' : '' }}>Permohonan Lulus</option>
                                                <option value="permohonan_tidak_lulus" {{ $info->jenis == "permohonan_tidak_lulus" ? 'selected' : '' }}>Permohonan Tidak Lulus</option>
                                                <option value="permohonan_berbayar" {{ $info->jenis == "permohonan_berbayar" ? 'selected' : '' }}>Permohonan Berbayar</option>
                                                <option value="permohonan_tidak_berbayar" {{ $info->jenis == "permohonan_tidak_berbayar" ? 'selected' : '' }}>Permohonan Tidak Berbayar</option>
                                                <option value="permohonan_gagal" {{ $info->jenis == "permohonan_gagal" ? 'selected' : '' }}>Permohonan Gagal</option>
                                                <option value="permohonan_batal" {{ $info->jenis == "permohonan_batal" ? 'selected' : '' }}>Permohonan Batal</option>
                                                <option value="permohonan_tiada_berkaitan" {{ $info->jenis == "permohonan_tiada_berkaitan" ? 'selected' : '' }}>Permohonan Tidak Berkaitan</option>

                                            </select>
                                      </div>
                                      @error('jenis')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="kepada">Kepada</label>
                                          <select id="kepada" class="custom-select  bg-light @error('kepada') is-invalid @enderror" name="kepada" value="{{ $info->kepada }}" autofocus>
                                                <option value="super_admin" {{ $info->kepada == "super_admin" ? 'selected' : '' }}>Super Admin</option>
                                                <option value="admin" {{ $info->kepada == "admin" ? 'selected' : '' }}>Admin</option>
                                                <option value="penyokong_1" {{ $info->kepada == "penyokong_1" ? 'selected' : '' }}>Penyokong 1</option>
                                                <option value="penyokong_2" {{ $info->kepada == "penyokong_2" ? 'selected' : '' }}>Penyokong 2</option>
                                                <option value="ketua_pengarah" {{ $info->kepada == "ketua_pengarah" ? 'selected' : '' }}>Ketua Pengarah</option>
                                                <option value="pemohon" {{ $info->kepada == "pemohon" ? 'selected' : '' }}>Pemohon</option>
                                            </select>
                                      </div>
                                      @error('kepada')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="subjek">Subjek</label>
                                          <input type="text" class="form-control bg-light" name="subjek" id="subjek" aria-describedby="subjek" placeholder="" value="{{ $info->subjek }}">
                                          <small id="subjek" class="form-text text-secondary"></small>
                                      </div>
                                      @error('subjek')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="tajuk">Tajuk</label>
                                          <input type="text" class="form-control bg-light" name="tajuk" id="tajuk" aria-describedby="tajuk" placeholder="" value="{{ $info->tajuk }}">
                                          <small id="tajuk" class="form-text text-secondary"></small>
                                      </div>
                                      @error('tajuk')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-inline justify-content-center">
                                    <!-- <label for="testing">Kandungan</label> -->
                                    <textarea type="text" class="form-control bg-light" name="kandungan" id="kandungan" aria-describedby="kandungan" placeholder="" form="senarai_email_submit">{{ $info->kandungan }}</textarea>
                                </div>
                                @error('kandungan')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Edit</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </main>
        <script>
            tinymce.init({
                selector:'#kandungan',
                // inline: true5
                width: 794,
                // width: 794,
                height: 1000,
            });
        </script>
@endsection
