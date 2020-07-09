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
      <div class="card-title">Maklumat Permohonan</div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info Permohonan</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rumusan</a>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="row">
              <div class="col-md-6 pt-3">
                <label for="f-name-1">Jenis Data</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $permohonan->jenis_data }}" readonly>
              </div>
              <div class="col-md-6 pt-3">
                <label for="f-name-1">Jenis Hutan</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_hutan" value="{{ $permohonan->jenis_hutan }}" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pt-1">
                <label for="f-name-1">Negeri</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="negeri" value="{{ $permohonan->negeri }}" readonly>
              </div>
              <div class="col-md-6 pt-1">
                <label for="f-name-1">Tahun</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="tahun" value="{{ $permohonan->tahun }}" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pt-1">
                <label for="f-name-1">Attachment Permohonan</label>
                @if($permohonan->attachment_permohonan != NULL)
                <a href="#">{{ $permohonan->attachment_permohonan }}</a>
                @else
                <input id="f-name-1" class="form-control bg-light" type="text" name="attachment_pemohonan" value="Tiada" readonly>
                @endif
              </div>
              <div class="col-md-6 pt-1">
                <label for="f-name-1">Dokumen Ke Luar Negara</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="tahun" value="{{ $permohonan->dokumen_ke_luar_negara }}" readonly>
              </div>
            </div>

          </div>

          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <!-- Example 2 -->
            <div class="text-center mt-3 mt-md-0-lt-4">
                <!-- Button trigger modal -->
                <button type="button" c lass="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                    Masuk Data AOI
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data AOI</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                          <input id="data_aoi-1" class="form-control bg-light" type="text" name="data_aoi" placeholder="Masukkan Data AOI">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan Maklumat</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">
                                <!-- Table head -->
                                <thead>
                                    <tr>
                                      <th class="all">ID</th>
                                      <th class="all">NAMA</th>
                                      <th class="all">KAD PENGENALAN</th>
                                      <th class="all">TARIKH LAHIR</th>
                                    </tr>
                                </thead>


            <!-- Create 2 row -->
            <div class="row">
                <!-- 1st row -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="f-name-1">Ulasan Admin</label>
                        <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_admin" rows="3" cols="50" readonly></textarea>
                    </div>
                </div>

                <!-- 2nd row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l-name-1">Ulasan Penyokong 1</label>
                        <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_penyokong1" rows="3" cols="50" readonly></textarea>
                    </div>
                </div>
                <!-- 3rd row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l-name-1">Ulasan Penyokong 2</label>
                        <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_penyokong2" rows="3" cols="50" readonly></textarea>
                    </div>
                </div>
                <!-- 4th row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l-name-1">Ulasan Ketua Pengarah</label>
                        <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_ketua_pengarah" rows="3" cols="50" readonly></textarea>
                    </div>
                </div>
            </div>

          </div>
      </div>
  </div>
</div>

            </div>
        </main>
@endsection
