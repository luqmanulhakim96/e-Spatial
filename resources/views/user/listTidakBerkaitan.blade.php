@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan Tidak Berkaitan</div>
                      <div class="row">
                        <div class="col-md">
                          <div class="card-header" style="text-align: justify; text-justify: inter-word; border: 1px solid black;">
                            <h6 >Catatan:</h6>
                            <span>Sekiranya permohonan anda tersenarai dalam permohonan tidak berkaitan, data yang anda berkemungkinan tidak ada dalam senarai. Sila buat permohonan semula atau menghubngi pihak JPSM.</span><br>

                          </div>
                        </div>
                      </div>
                      <div style="padding: 10px;"></div>

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_user_gagal" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                              <th class="all">TARIKH PERMOHONAN DIBATALKAN</th>

                              <!-- <th class="all">STATUS PERMOHONAN</th> -->


                            </tr>
                        </thead>

                        <tbody>
                          @foreach($list_tidak_berkaitan as $batal)
                          <tr>
                            <td>{{ $batal->getPermohonanID()  }}</td>
                            <td>{{ Carbon\Carbon::parse($batal->created_at)->format('d-m-Y H:i:s')  }}</td>
                            <td>{{ Carbon\Carbon::parse($batal->updated_at)->format('d-m-Y H:i:s')  }}</td>

                            <!-- <td>
                              <span class="badge badge-danger badge-pill" style="font-size: 100%;">{{ $batal->status_permohonan  }}</span>
                            </td> -->
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </main>
@endsection
