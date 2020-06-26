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
                      <div class="card-title">Audit Trail</div>
                      
                      <table class="table table-striped table-bordered" id="responsiveAuditTable" style="width: 100%;">
                        <!-- Table head -->
                        <thead>
                            <tr>
                              <th class="all">Nama Pengguna</th>
                              <th class="all">Role</th>
                              <th class="all">Event</th>
                              <th class="all">Database</th>
                              <th class="all">Data Lama</th>
                              <th class="all">Data Baharu</th>
                              <th class="all">IP Address</th>
                              <th class="all">Timestamp</th>
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
                            @endif
                            <td>{{  ucfirst($datas->event) }}</td>
                            <td>{{ substr($datas->auditable_type, strpos($datas->auditable_type, "/") + 4) }}</td>
                            @if( $datas->old_values == "[]")
                            <td>-</td>
                            @else
                            <td>{{ $datas->old_values }}</td>
                            @endif
                            @if( $datas->new_values == "[]")
                            <td>-</td>
                            @else
                            <td>{{ $datas->new_values }}</td>
                            @endif
                            <td>{{ $datas->ip_address }}</td>
                            <td>{{  Carbon\Carbon::parse($datas->updated_at)->format('d-m-Y h:i:s')  }}</td>
                          </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </main>
@endsection