@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->
                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Audit Trail Log Akses</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Audit Trail</div> -->
                      <div style="padding:5px;"></div>


                      <form class="" action="{{route('superadmin.auditTrailLogUserFilter')}}" method="post">
                        @csrf
                      <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-4">
                          <label>Dari :</label>
                          <input id="tarikh_mula" class="form-control bg-light" type="date" name="tarikh_mula" required>
                        </div>
                        <div class="col-md-4">
                          <label>Hingga :</label>
                          <input id="tarikh_akhir" class="form-control bg-light" type="date" name="tarikh_akhir" required>
                        </div>
                        <div class="col-md-3">
                          <div style="padding:15px;"></div>
                          <button type="submit" class="btn btn-primary m-auto" name="button"><i class="fa fa-search" aria-hidden="true"></i> Tapis Senarai</button>
                          <a href="{{ route('superadmin.auditTrailLogUser') }}" class="btn btn-primary m-auto"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</a>
                        </div>
                      </div>

                    </form>


                      <hr>



                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="responsiveAuditTable" style="width: 100%;">
                        <!-- Table head -->
                        <thead>
                            <tr>
                              <th class="all">Nama Pengguna</th>
                              <th class="all">Peranan</th>
                              <th class="all">Alamat IP</th>
                              <th class="all">Tarikh / Masa</th>
                              <th class="all">Pengkalan Data</th>
                              <th class="all">Acara</th>

                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                          @foreach($data as $datas)
                            @if( $datas->user_id != NULL)
                            <tr>
                            @if($datas->user->name == NULL)
                            <td>Tiada</td>
                            @else
                            <td>{{  ucfirst($datas->user->name) }}</td>
                            @endif
                            @if($datas->user->role == 0)
                            <td> Pentadbir Sistem (Admin) </td>
                            @elseif($datas->user->role == 1)
                            <td> Penyokong 1 </td>
                            @elseif($datas->user->role == 2)
                            <td> Penyokong 2 </td>
                            @elseif($datas->user->role == 3)
                            <td> Ketua Pengarah </td>
                            @elseif($datas->user->role == 4)
                            <td> Superadmin </td>
                            @elseif($datas->user->role == 5)
                            <td> Pengguna Biasa </td>
                            @endif
                            <td>{{ $datas->ip_address }}</td>
                            <!-- <td>{!!  Carbon\Carbon::parse($datas->updated_at)->format('M-d-Y h:i:s')  !!}</td> -->
                            <td>{{  Carbon\Carbon::parse($datas->updated_at)->format('Y-m-d h:i:s')  }}</td>
                            <td>{{ substr($datas->auditable_type, strpos($datas->auditable_type, "/") + 4) }}</td>

                            @if($datas->event == "Log Masuk")
                            <td><span class="badge m-1 badge-success" style="font-size:12px;">Log Masuk</span></td>
                            @else
                            <td><span class="badge m-1 badge-warning" style="font-size:12px;">Log Keluar</span></td>
                            @endif
                          </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
            </div>
        </main>

@endsection
