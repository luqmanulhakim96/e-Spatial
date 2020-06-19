@extends('layouts.app')+
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small>
                </div>
                <!-- Small card component -->

                      <div class="card rounded-lg">
  <div class="card-body">
      <div class="card-title">Maklumat Pemohon</div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Permohonan</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rumusan</a>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

              <div class="row">
                  <!-- 1st row -->
                  <div class="col-md-6 pt-1">
                      <div class="form-group">
                          <label for="f-name-1">Nama</label>
                          <input id="f-name-1" class="form-control bg-light" type="text" name="name" value="{{ $pemohon->name }}" readonly>
                      </div>
                  </div>
                  <!-- 2nd row -->
                  <div class="col-md-6 pt-1">
                      <div class="form-group">
                          <label for="l-name-1">Kategori</label>
                          <input id="l-name-1" class="form-control bg-light" type="text" name="kategori" value="{{ $pemohon->kategori }}" readonly>
                      </div>
                  </div>
              </div>
              <!-- Create 2 row -->
              <div class="row">
                  <!-- 1st row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="email-1">No Kad Pengenalan</label>
                          <input id="email-1" class="form-control bg-light" type="text" name="kad_pengenalan" value="{{ $pemohon->kad_pengenalan }}" readonly>
                      </div>
                  </div>
                  <!-- 2nd row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="phone-1">Kerakyatan</label>
                          <input id="phone-1" class="form-control bg-light" type="text" name="kerakyatan" value="{{ $pemohon->kerakyatan }}" readonly>
                      </div>
                  </div>
              </div>
              <!-- Create 2 row -->
              <div class="row">
                  <!-- 1st row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="card-1">Tarikh Lahir</label>
                          <input id="card-1" class="form-control bg-light" type="text" name="tarikh_lahir" value="{{ $pemohon->tarikh_lahir }}" readonly>
                      </div>
                  </div>
                  <!-- 2nd row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="website-1">Jawatan</label>
                          <input id="website-1" class="form-control bg-light" type="url" name="jawatan" value="{{ $pemohon->jawatan }}" readonly>
                      </div>
                  </div>
              </div>
              <!-- Create 2 row -->
              <div class="row">
                  <!-- 1st row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="b-day-1">Jenis Perniagaan</label>
                          <input id="website-1" class="form-control bg-light" type="url" name="jenis_perniagaan" value="{{ $pemohon->jenis_perniagaan }}" readonly>
                      </div>
                  </div>
                  <!-- 2nd row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="select-1">Nama Kementerian</label>
                          <input id="website-1" class="form-control bg-light" type="url" name="nama_kementarian" value="{{ $pemohon->nama_kementarian }}" readonly>
                      </div>
                  </div>
              </div>
              <!-- Create 2 row -->
              <div class="row">
                  <!-- 1st row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="b-day-1">Alamat Kediaman</label>
                          <textarea id="alamat_kediaman" class="form-control bg-light" name="alamat_kediaman" rows="3" cols="50" readonly>{{ $pemohon->alamat_kediaman }}</textarea>
                      </div>
                  </div>
                  <!-- 2nd row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="select-1">Alamat Kementerian</label>
                          <textarea id="alamat_kediaman" class="form-control bg-light" name="alamat_kementerian" rows="3" cols="50" readonly>{{ $pemohon->alamat_kementarian }}</textarea>
                      </div>
                  </div>
              </div>
              <!-- Create 2 row -->
              <div class="row">
                  <!-- 1st row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="b-day-1">No Rumah</label>
                          <input id="website-1" class="form-control bg-light" type="url" name="no_tel_rumah" value="{{ $pemohon->no_tel_rumah }}" readonly>
                      </div>
                  </div>
                  <!-- 2nd row -->
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="select-1">No Telefon</label>
                          <input id="website-1" class="form-control bg-light" type="url" name="no_tel_bimbit" value="{{ $pemohon->no_tel_bimbit }}" readonly >
                      </div>
                  </div>
              </div>

          </div>

          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

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
