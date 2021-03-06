@extends('layouts.app_user_eng')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
              <div class="theme-option p-3 border-1" style="border: 1px solid;border-color: #003e61 !important;">
                  <div class="theme-pck" data-toggle="tooltip" data-placement="left" title="Bahasa | Language">
                      <i class="fa fa-globe" aria-hidden="true" style="font-size: 180% !important;"></i>
                  </div>
                  <p style="font-size: 110%;">Pilih Bahasa | Choose Language</p>
                  <div class="row">
                    <div class="col-md">
                      <div class="btn-group">
                          <!-- <button class="btn btn-primary">Bahasa Melayu</button> -->
                          <a href="{{ route('user.listGagal') }}" class="btn btn-outline-primary">Bahasa Melayu</a>
                          <button class="btn btn-primary">English</button>
                          <!-- <a href="{{ route('user.listSedangDiproses_eng') }}" class="btn btn-outline-primary">English</a> -->
                      </div>
                    </div>
                  </div>
                  <!-- <div class="side-nav-themes d-flex flex-row">
                      <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
                      <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
                  </div> -->
              </div>
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">List Of Failed Application</div>

                  <div class="card-body">
                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_user_gagal_eng" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">APPLICATION ID</th>
                              <th class="all">APPLICATION DATE</th>

                              <th class="all">DOWNLOAD FAILED APPLICATION LETTER</th>

                            </tr>
                        </thead>

                        <tbody>
                          @foreach($list_gagal as $gagal)
                          <tr>
                            <td>{{ $gagal->getPermohonanID()  }}</td>
                            <td>{{ Carbon\Carbon::parse($gagal->created_at)->format('d-m-Y H:i:s')  }}</td>
                            <!-- <td>
                              <span class="badge badge-danger badge-pill" style="font-size: 100%;">{{ $gagal->status_permohonan  }}</span>
                            </td> -->
                            <td>
                              <a class="btn btn-success mr-1" href="{{route('user.download.surat_tidak_lulus', $gagal->id)}}" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Muat turun Surat Tidak Lulus"><i class="fa fa-download"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </main>
@endsection
