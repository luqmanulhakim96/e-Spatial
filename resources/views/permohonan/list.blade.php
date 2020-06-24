@extends('layouts.app')+
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small>
                </div>
                <!-- Pills Tab-->
                                    <div class="card rounded-lg">
                                        <div class="card-body">
                                            <div class="card-title">Senarai Pemohon</div>
                                            <!-- Tab nav -->
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pemohon Baru</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Pemohon Lulus</a>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                  <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">ATTACHMENT</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>

                                                  </table>
                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                  <table class="table table-striped table-bordered" id="responsiveDataTable2" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA</th>
                                                          <th class="all">STATUS PEMBAYARAN</th>
                                                          <th class="all">ATTACHMENT</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>
                                                  </table>

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
