@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Pills Tab-->
                                    <div class="card rounded-lg">
                                        <div class="card-body">
                                            <div class="card-title">Senarai Permohonan (Current User role: {{$userInfo->role}}) </div>



                                            <!-- Tab nav -->
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-baru-tab" data-toggle="pill" href="#pills-baru" role="tab" aria-controls="pills-baru" aria-selected="true">Permohonan Baru</a>
                                                </li>
                                                @if($userInfo->role == 0)
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-proses-tab" data-toggle="pill" href="#pills-proses" role="tab" aria-controls="pills-proses" aria-selected="false">Permohonan Sedang Diproses</a>
                                                </li>
                                                @endif
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-lulus-tab" data-toggle="pill" href="#pills-lulus" role="tab" aria-controls="pills-lulus" aria-selected="false">Permohonan Lulus</a>
                                                </li>
                                                @if($userInfo->role == 0)
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-gagal-tab" data-toggle="pill" href="#pills-gagal" role="tab" aria-controls="pills-gagal" aria-selected="false">Permohonan Gagal</a>
                                                </li>
                                                @endif
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-dalaman-tab" data-toggle="pill" href="#pills-dalaman" role="tab" aria-controls="pills-dalaman" aria-selected="false">Permohonan Dalaman</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-baru" role="tabpanel" aria-labelledby="pills-baru-tab">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_baru" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA Permohonan</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">ATTACHMENT PERMOHONAN</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                      @if($userInfo->role == 0)

                                                      @foreach($listPermohonanBaru as $baru)
                                                      <tr>
                                                        @if($userInfo->role != 0)
                                                        <td>
                                                          <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}0</a>
                                                        </td>
                                                        @else
                                                          @if($baru->jumlah_bayaran == 0.00)
                                                          <td>
                                                            <a href="{{ route('permohonan.harga.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @else
                                                          <td>
                                                            <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @endif

                                                        @endif
                                                        <td><span class="badge badge-warning badge-pill">{{ $baru->status_permohonan  }}</span></td>
                                                        <td><a class="fa fa-download" href="{{route('permohonan.download.surat_permohonan',$baru->id)}}"></a></td>
                                                        <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td>
                                                      </tr>
                                                      @endforeach

                                                      @elseif($userInfo->role == 1)

                                                      @foreach($listPermohonanBaru_p1 as $baru)
                                                      <tr>
                                                        @if($userInfo->role != 0)
                                                        <td>
                                                          <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}1</a>
                                                        </td>
                                                        @else
                                                          @if($baru->jumlah_bayaran == 0.00)
                                                          <td>
                                                            <a href="{{ route('permohonan.harga.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @else
                                                          <td>
                                                            <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @endif

                                                        @endif
                                                        <td><span class="badge badge-warning badge-pill">{{ $baru->status_permohonan  }}</span></td>
                                                        <td>{{ $baru->attachment_permohonan}}</td>
                                                        <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td>
                                                      </tr>
                                                      @endforeach

                                                      @elseif($userInfo->role == 2)

                                                      @foreach($listPermohonanBaru_p2 as $baru)
                                                      <tr>
                                                        @if($userInfo->role != 0)
                                                        <td>
                                                          <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}2</a>
                                                        </td>
                                                        @else
                                                          @if($baru->jumlah_bayaran == 0.00)
                                                          <td>
                                                            <a href="{{ route('permohonan.harga.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @else
                                                          <td>
                                                            <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @endif

                                                        @endif
                                                        <td><span class="badge badge-warning badge-pill">{{ $baru->status_permohonan  }}</span></td>
                                                        <td>{{ $baru->attachment_permohonan}}</td>
                                                        <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td>
                                                      </tr>
                                                      @endforeach

                                                      @elseif($userInfo->role == 3)

                                                      @foreach($listPermohonanBaru_kp as $baru)
                                                      <tr>
                                                        <!-- kalau jumlah bayaran == 0, masuk page harga -->
                                                        @if($userInfo->role != 0)
                                                        <td>
                                                          <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}3</a>
                                                        </td>
                                                        @else
                                                          @if($baru->jumlah_bayaran == 0.00)
                                                          <td>
                                                            <a href="{{ route('permohonan.harga.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @else
                                                          <td>
                                                            <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @endif

                                                        @endif
                                                        <td><span class="badge badge-warning badge-pill">{{ $baru->status_permohonan  }}</span></td>
                                                        <td>{{ $baru->attachment_permohonan}}</td>
                                                        <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td>
                                                      </tr>s
                                                      @endforeach

                                                      @endif

                                                    </tbody>

                                                  </table>
                                                </div>

                                                <div class="tab-pane fade" id="pills-lulus" role="tabpanel" aria-labelledby="pills-lulus-tab">

                                                  <div class="modal fade" id="status_harga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Update Status Bayaran</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <form action="{{route('permohonan.statusPembayaran.update')}}" method="post">
                                                          @csrf
                                                          <div class="modal-body">

                                                              <div class="form-group">
                                                                <label for="dokumen_ke_luar_negara">Status pembayaran:</label>

                                                                <!-- All Radio Button  -->
                                                                <div class="switchs">
                                                                    <!-- Primary Radio Button  -->

                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="Sudah Dibayar" name="status_pembayaran" class="custom-control-input"  value="Sudah Dibayar" @if(old('status_pembayaran')=="Sudah Dibayar") checked @endif>
                                                                    <label class="custom-control-label" for="Sudah Dibayar">Sudah Dibayar</label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="Pengecualian Bayaran" name="status_pembayaran" class="custom-control-input"  value="Pengecualian Bayaran" @if(old('status_pembayaran')=="Pengecualian Bayaran") checked @endif>
                                                                    <label class="custom-control-label" for="Pengecualian Bayaran">Pengecualian Bayaran</label>
                                                                </div>
                                                              </div>

                                                              </div>

                                                              <input type="text" name="permohonan_id" id="permohonan_id" value="">
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="submit"  class="btn btn-primary" >Update Status Pembayaran</button>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <table class="table table-striped table-bordered" id="list_permohonan_lulus" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">STATUS PEMBAYARAN</th>
                                                          <th class="all">RECEIPT PEMBAYARAN</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                      @foreach($listPermohonanLulus as $lulus)
                                                      <tr>
                                                        <td>{{ $lulus->user->name  }}</td>
                                                        <td><span class="badge badge-success badge-pill">{{ $lulus->status_permohonan  }}</span></td>
                                                        @if($lulus->status_pembayaran == 'Belum Dibayar')

                                                        @if($userInfo->role == 0)
                                                        <td><button class="btn btn-warning rounded m-2" onclick="passId({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#status_harga">{{ $lulus->status_pembayaran  }}</button></td>
                                                        @else
                                                        <td><button class="btn btn-warning rounded m-2">{{ $lulus->status_pembayaran  }}</button></td>
                                                        @endif
                                                        <!-- <td><span class="badge badge-warning badge-pill">{{ $lulus->status_pembayaran  }}</span></td> -->
                                                        @else
                                                        <td><span class="badge badge-success badge-pill">{{ $lulus->status_pembayaran  }}</span></td>
                                                        @endif

                                                        @if($lulus->attachment_receipt != null)
                                                        <td>{{ $lulus->attachment_permohonan}}</td>
                                                        @else
                                                        <td>Tiada</td>
                                                        @endif


                                                        <!-- <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td> -->
                                                      </tr>
                                                      @endforeach
                                                    </tbody>

                                                  </table>
                                                </div>

                                                <div class="tab-pane fade" id="pills-dalaman" role="tabpanel" aria-labelledby="pills-dalaman-tab">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_dalaman" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA</th>
                                                          <th class="all">KATEGORI</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">TARIKH PERMOHONAN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach($listPermohonanDalaman as $dalaman)
                                                      <tr>
                                                        <td>{{$dalaman->user->name}}</td>
                                                        <td>{{$dalaman->user->kategori}}</td>
                                                        <td>{{$dalaman->status_permohonan}}</td>
                                                        <td>{{$dalaman->created_at}}</td>
                                                      </tr>
                                                      @endforeach

                                                    </tbody>
                                                  </table>
                                                </div>

                                                @if($userInfo->role == 0)
                                                <!-- tab sedang diproses -->
                                                <div class="tab-pane fade" id="pills-proses" role="tabpanel" aria-labelledby="pills-proses-tab">
                                                    <table class="table table-striped table-bordered" id="list_permohonan_baru_2" style="width: 100%;">

                                                      <thead>
                                                          <tr>
                                                            <th class="all">PERMOHONAN ID</th>
                                                            <th class="all">NAMA PEMOHON</th>
                                                            <th class="all">TARIKH PERMOHONAN</th>
                                                            <th class="all">STATUS PERMOHONAN</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                        @foreach($listPermohonanBaru2 as $baru2)
                                                        <tr>
                                                          <td>{{$baru2->id}}</td>
                                                          <td>{{$baru2->user->name}}</td>
                                                          <td>{{$baru2->user->created_at}}</td>
                                                          @if($baru2->ulasan_penyokong_1 == null)
                                                          <td>Menunggu ulasan Penyokong 1</td>
                                                          @elseif($baru2->ulasan_penyokong_2 == null)
                                                          <td>Menunggu ulasan Penyokong 2</td>
                                                          @elseif($baru2->ulasan_ketua_pengarah == null)
                                                          <td>Menunggu ulasan Ketua Pengarah</td>
                                                          @else
                                                          <td>{{$baru2->status_permohonan}}</td>
                                                          @endif
                                                        </tr>
                                                        @endforeach
                                                      </tbody>

                                                    </table>
                                                </div>
                                                <!-- tab permohonan gagal -->
                                                <div class="tab-pane fade" id="pills-gagal" role="tabpanel" aria-labelledby="pills-gagal-tab">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_gagal" style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                          <th class="all">PERMOHONAN ID</th>
                                                          <th class="all">NAMA PEMOHON</th>
                                                          <th class="all">TARIKH PERMOHONAN</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach($listPermohonanGagal as $baru2)
                                                      <tr>
                                                        <td>{{$baru2->id}}</td>
                                                        <td>{{$baru2->user->name}}</td>
                                                        <td>{{$baru2->user->created_at}}</td>
                                                        @if($baru2->ulasan_penyokong_1 == null)
                                                        <td>Menunggu ulasan Penyokong 1</td>
                                                        @elseif($baru2->ulasan_penyokong_2 == null)
                                                        <td>Menunggu ulasan Penyokong 2</td>
                                                        @elseif($baru2->ulasan_ketua_pengarah == null)
                                                        <td>Menunggu ulasan Ketua Pengarah</td>
                                                        @else
                                                        <td>{{$baru2->status_permohonan}}</td>
                                                        @endif
                                                      </tr>
                                                      @endforeach
                                                    </tbody>
                                                  </table>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                      </div>

            </div>
        </main>
        <script type="text/javascript">
        //pass id from table to modal
          function passId(id){
            //var permohonan_id = $(this).data('id');
            $(".modal-body #permohonan_id").val( id );
          }
        </script>
@endsection
