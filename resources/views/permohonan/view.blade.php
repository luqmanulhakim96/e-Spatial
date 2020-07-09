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
                <label for="f-name-1">Nama Pemohon:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->name }}" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pt-3">
                <label for="f-name-1">Kad Pengenalan:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->kad_pengenalan }}" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pt-3">
                <label for="f-name-1">Kerakyatan:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->kerakyatan }}" readonly>
              </div>
            </div>

          </div>

          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form  action="{{route('permohonan.ulasan.update',$permohonan->id)}}" method="post">
              @csrf
              <!-- Create 2 row -->
              <div class="row">
                  <!-- 1st row -->

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="f-name-1">Ulasan Admin</label>
                          <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_admin" rows="3" cols="50" ></textarea>
                      </div>
                  </div>


                  <div class="col-md-6">
                      <!-- <div class="form-group">
                          <label for="l-name-1">Ulasan Penyokong 1</label>
                          <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_penyokong1" rows="3" cols="50" readonly></textarea>
                      </div> -->
                  </div>

                  <div class="col-md-6">
                      <!-- <div class="form-group">
                          <label for="l-name-1">Ulasan Penyokong 2</label>
                          <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_penyokong2" rows="3" cols="50" readonly></textarea>
                      </div> -->
                  </div>

                  <div class="col-md-6">
                      <!-- <div class="form-group">
                          <label for="l-name-1">Ulasan Ketua Pengarah</label>
                          <textarea id="alamat_kediaman" class="form-control bg-light" name="ulasan_ketua_pengarah" rows="3" cols="50" readonly></textarea>
                      </div> -->
                  </div>
                  <button type="submit" class="btn btn-primary">Hantar Ulasan</button>
              </div>
            </form>
          </div>
      </div>
  </div>
</div>

            </div>
        </main>
@endsection
