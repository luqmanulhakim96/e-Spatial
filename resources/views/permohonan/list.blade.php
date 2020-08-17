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
                                            <div class="card-title">Senarai Permohonan</div>



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
                                                  <div class="table-responsive">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_baru" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">NAMA PEMOHON</p></div></th>
                                                          <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">STATUS PERMOHONAN</p></div></th>
                                                          <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">SURAT PERMOHONAN</p></div></th>
                                                          <!-- <th class="all">PRINT</th> -->
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                      @if($userInfo->role == 0)

                                                      @foreach($listPermohonanBaru as $baru)
                                                      <tr>
                                                        @if($userInfo->role != 0)
                                                        <td>
                                                          <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </div>
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
                                                        <td><span class="badge badge-warning badge-pill" style="font-size: 100%;">{{ $baru->status_permohonan  }}</span></td>
                                                        <td>
                                                          <button class="btn btn-success m-2">
                                                            <a class="fa fa-download"  href="{{route('permohonan.download.surat_permohonan',$baru->id)}}"></a>
                                                          </button>
                                                        </td>
                                                        <!-- <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td> -->
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
                                                        <td><a class="fa fa-download" href="{{route('permohonan.download.surat_permohonan',$baru->id)}}"></a></td>

                                                        <!-- <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td> -->
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
                                                        <td><a class="fa fa-download" href="{{route('permohonan.download.surat_permohonan',$baru->id)}}"></a></td>

                                                        <!-- <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td> -->
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
                                                        <td><a class="fa fa-download" href="{{route('permohonan.download.surat_permohonan',$baru->id)}}"></a></td>

                                                        <!-- <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td> -->
                                                      </tr>s
                                                      @endforeach

                                                      @endif

                                                    </tbody>

                                                  </table>
                                                </div>
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
                                                                    <input type="radio" id="Perlu Dibayar" name="status_pembayaran" class="custom-control-input"  value="Perlu Dibayar" @if(old('status_pembayaran')=="Perlu Dibayar") checked @endif>
                                                                    <label class="custom-control-label" for="Perlu Dibayar">Perlu Dibayar</label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="Pengecualian Bayaran" name="status_pembayaran" class="custom-control-input"  value="Pengecualian Bayaran" @if(old('status_pembayaran')=="Pengecualian Bayaran") checked @endif>
                                                                    <label class="custom-control-label" for="Pengecualian Bayaran">Pengecualian Bayaran</label>
                                                                </div>

                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="Sudah Dibayar" name="status_pembayaran" class="custom-control-input"  value="Sudah Dibayar" @if(old('status_pembayaran')=="Sudah Dibayar") checked @endif>
                                                                    <label class="custom-control-label" for="Sudah Dibayar">Sudah Dibayar</label>
                                                                </div>


                                                              </div>

                                                              </div>

                                                              <input type="hidden" name="permohonan_id" id="permohonan_id" value="">
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="submit"  class="btn btn-primary" >Update Status Pembayaran</button>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="modal fade" id="upload_surat_bayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Upload Surat Bayaran</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <form action="{{route('permohonan.upload.surat_bayaran')}}" method="post" enctype="multipart/form-data">
                                                          @csrf
                                                          <div class="modal-body">

                                                            <div class="form-group">
                                                              <label for="">Upload Surat Pembayaran</label>
                                                              <!-- <input type="file" required onchange="fileValidation('attachment_surat_bayaran')" class="form-control bg-light" id="attachment_surat_bayaran" name="attachment_surat_bayaran" aria-describedby="attachment_surat_bayaran"> -->
                                                              <div class="custom-file">
                                                                  <input type="file" required class="custom-file-input" required id="attachment_surat_bayaran" onchange="return fileValidation('attachment_surat_bayaran')" name="attachment_surat_bayaran">
                                                                  <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                              </div>
                                                              <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 100MB</small>

                                                            </div>

                                                              <input type="hidden" id="permohonan_id_upload_surat_bayaran" name="permohonan_id_upload_surat_bayaran" value="">

                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="submit"  class="btn btn-primary" >Muatnaik</button>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="modal fade" id="upload_link_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Upload Dokumen Dan Link Data</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <form action="{{route('permohonan.upload.link_data')}}" method="post" enctype="multipart/form-data">
                                                          @csrf
                                                          <div class="modal-body">

                                                            <div class="form-group">
                                                              <label for="">Link data</label>
                                                              <input required class="form-control bg-light" type="text" name="link_data" placeholder="Masukkan link untuk muat turun data">
                                                            </div>

                                                            <div class="form-group">
                                                              <label for="">Upload Surat Penerimaan Data</label>
                                                              <!-- <input type="file" required onchange="fileValidation('attachment_penerimaan_data')" class="form-control bg-light" id="attachment_penerimaan_data" name="attachment_penerimaan_data" aria-describedby="attachment_penerimaan_data"> -->
                                                              <div class="custom-file">
                                                                  <input type="file" required class="custom-file-input" required id="attachment_penerimaan_data" onchange="return fileValidation('attachment_penerimaan_data')" name="attachment_penerimaan_data">
                                                                  <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                              </div>
                                                              <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 100MB</small>

                                                            </div>

                                                              <input type="hidden" id="permohonan_id_link_data" name="permohonan_id_link_data" value="">

                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="submit"  class="btn btn-primary" >Muatnaik</button>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="table-responsive">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_lulus" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">PERMOHONAN ID</th>
                                                          <th class="all">NAMA</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">STATUS PEMBAYARAN PEMOHON</th>
                                                          <th class="all">MUAT NAIK SURAT KELULUSAN</th>
                                                          <th class="all">JUMLAH BAYARAN (RM)</th>
                                                          <th class="all">RESIT PEMBAYARAN</th>
                                                          @if($userInfo->role == 0)
                                                          <th class="all">MUATNAIK DOKUMEN DAN LINK DATA</th>
                                                          @endif
                                                          <th class="all">Surat Penerimaan Data</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                      @foreach($listPermohonanLulus as $lulus)
                                                      <tr>
                                                        <td>{{ $lulus->id  }}</td>

                                                        <td><a href="{{ route('permohonan.view', $lulus->id) }}">{{ $lulus->user->name  }}</a></td>

                                                        <td><span class="badge badge-success badge-pill">{{ $lulus->status_permohonan  }}</span></td>

                                                        @if($lulus->status_pembayaran == 'Belum Dibayar')
                                                        <td><button class="btn btn-warning rounded m-2" onclick="passId({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#status_harga">Pilih Status Bayaran</button></td>
                                                        @elseif($lulus->status_pembayaran == 'Pengecualian Bayaran')
                                                        <td><span class="badge badge-primary badge-pill">{{ $lulus->status_pembayaran  }}</span></td>
                                                        @elseif($lulus->status_pembayaran == 'Perlu Dibayar')
                                                        <td><button class="btn btn-warning rounded m-2" onclick="passId({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#status_harga">{{$lulus->status_pembayaran}}</button></td>
                                                        @elseif($lulus->status_pembayaran == 'Sudah Dibayar')
                                                        <td><span class="badge badge-success badge-pill">{{ $lulus->status_pembayaran  }}</span></td>
                                                        @endif

                                                        @if($lulus->attachment_surat_bayaran == null)
                                                        <td><button class="btn btn-success mr-1" onclick="passId_upload_surat_bayaran({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#upload_surat_bayaran"><i class="fa fa-upload"></i></button></td>
                                                        @else
                                                        <td><button class="btn btn-dark mr-1"><i class="fa fa-upload"></i> </button></td>
                                                        @endif

                                                        <td><span >{{ $lulus->jumlah_bayaran  }}</span></td>


                                                        @if($lulus->attachment_receipt_pembayaran != null)
                                                        <td>
                                                          <a href="{{route('permohonan.download.attachment_receipt_pembayaran',  $lulus->id)}}">
                                                            <i class="fa fa-download"></i>
                                                          </a>
                                                        </td>
                                                        @else
                                                        <td>Tiada</td>
                                                        @endif

                                                        @if($lulus->link_data == null)
                                                        <td><button class="btn btn-success mr-1" onclick="passId_upload_link_data({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#upload_link_data"><i class="fa fa-upload"></i></button></td>
                                                        @else
                                                        <td><button class="btn btn-dark mr-1"><i class="fa fa-upload"></i> </button></td>
                                                        @endif

                                                        @if($lulus->attachment_penerimaan_data_user != null)
                                                        <td>
                                                          <a href="{{route('permohonan.download.attachment_penerimaan_data_user',  $lulus->id)}}">
                                                            <i class="fa fa-download"></i>
                                                          </a>
                                                        </td>
                                                        @else
                                                        <td>Tiada</td>
                                                        @endif
                                                      </tr>
                                                      @endforeach
                                                    </tbody>

                                                  </table>
                                                  </div>
                                                </div>

                                                <div class="tab-pane fade" id="pills-dalaman" role="tabpanel" aria-labelledby="pills-dalaman-tab">
                                                  <div class="table-responsive">
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
                                                </div>

                                                @if($userInfo->role == 0)
                                                <!-- tab sedang diproses -->
                                                <div class="tab-pane fade" id="pills-proses" role="tabpanel" aria-labelledby="pills-proses-tab">
                                                  <div class="table-responsive">

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

                                                </div>
                                                <!-- tab permohonan gagal -->
                                                <div class="tab-pane fade" id="pills-gagal" role="tabpanel" aria-labelledby="pills-gagal-tab">
                                                  <div class="table-responsive">

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

          function passId_upload_surat_bayaran(id){
            $(".modal-body #permohonan_id_upload_surat_bayaran").val( id );
          }

          function passId_upload_link_data(id){
            $(".modal-body #permohonan_id_link_data").val( id );
          }

          function fileValidation(name){
            var fileInput = document.getElementById(name);
            var filePath = fileInput.value;
            var allowedExtensions = /(\.pdf)$/i;
            if(!allowedExtensions.exec(filePath)){
                alert('Sila muatnaik file dalam format .pdf sahaja.');
                fileInput.value = '';
                return false;
            }
        }

        $('#attachment_surat_bayaran').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

        $('#attachment_penerimaan_data').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
@endsection
