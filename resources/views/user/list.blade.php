@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Permohonan Lulus</div>

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_user_lulus" style="width: 100%;">
                          <!-- Table head -->
                          <thead>
                              <tr>
                                <th class="all">TARIKH PERMOHONAN</th>
                                <th class="all">STATUS PERMOHONAN</th>
                                <th class="all">JUMLAH BAYARAN</th>
                                <th class="all">STATUS PEMBAYARAN</th>
                                <th class="all">MUAT TURUN SURAT KELULUSAN</th>
                                <th class="all">MUAT NAIK RESIT PEMBAYARAN</th>
                                <th class="all">MUAT TURUN BORANG AKUAN PENERIMAAN DATA</th>
                                <th class="all">MUAT NAIK BORANG AKUAN PENERIMAAAN DATA</th>
                              </tr>
                          </thead>
                          <!-- Table body -->
                          <tbody>
                            @foreach($list_lulus as $data)
                            <tr>

                              <td>
                                <div style="padding : 4px;"></div>
                                {{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i:s') }}
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                <span class="badge badge-success badge-pill" style="font-size: 100%;">{{ $data->status_permohonan  }}</span>
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                RM {{ $data->jumlah_bayaran  }}
                              </td>

                              @if($data->status_pembayaran == 'Pengecualian Bayaran')
                              <td>
                                <div style="padding : 4px;"></div>
                                <span class="badge badge-primary badge-pill" style="font-size: 100%;">{{ $data->status_pembayaran  }}</span>
                              </td>
                              @elseif($data->status_pembayaran == 'Berbayar')
                              <td>
                                <div style="padding : 4px;"></div>
                                <span class="badge badge-warning badge-pill" style="font-size: 100%;">Belum Dibayar</span>
                              </td>
                              @elseif($data->status_pembayaran == 'Sudah Dibayar')
                              <td>
                                <div style="padding : 4px;"></div>
                                <span class="badge badge-success badge-pill" style="font-size: 100%;">{{ $data->status_pembayaran  }}</span>
                              </td>
                              @endif

                              @if($data->attachment_surat_bayaran == null)
                              <td>
                                  <!-- <button type="button" class="fa fa-download" name="button"></button> -->
                                  <button class="btn btn-dark mr-1" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Tiada Data">
                                  <i class="fa fa-download"></i>
                                  </button>
                              </td>
                              @else
                              <td>
                                <a  href="{{route('user.download.surat_bayaran', $data->id)}}">
                                  <button class="btn btn-success mr-1" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Muat turun Surat Kelulusan">
                                  <i class="fa fa-download"></i>
                                  </button>
                                </a>
                              </td>
                              @endif
                              <!-- column muat naik receipt pembayaran -->
                              @if($data->attachment_receipt_pembayaran == null)
                              <td>
                                <div class="d-flex flex-row justify-content-around align-items-center">

                                  @if($data->status_pembayaran == 'Berbayar')
                                  <button class="btn btn-warning mr-1"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-upload"></i>
                                  </button>
                                  @elseif($data->status_pembayaran == 'Pengecualian Bayaran')
                                  <button class="btn btn-dark mr-1" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Tidak perlu muatnaik data">
                                    <i class="fa fa-upload"></i>
                                  </button>
                                  @elseif($data->status_pembayaran == 'Sudah Dibayar')
                                  <button class="btn btn-success mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-upload"></i>
                                  </button>
                                  @endif

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <form action="{{route('user.upload.resit_pembayaran')}}" enctype="multipart/form-data" method="post" class="px-4 py-3">
                                          @csrf
                                          <h5>Muat Naik Resit Pembayaran</h5>
                                          <small>Saiz file tidak melebihi 100MB.</small>
                                          <!-- Upload Resit PEMBAYARaran -->
                                          <div class="input-group mt-3">
                                              <!-- <input type="file" onchange="return fileValidation('attachment_receipt_pembayaran')" class="form-control bg-light" id="attachment_receipt_pembayaran" name="attachment_receipt_pembayaran" aria-describedby="attachment_receipt_pembayaran"> -->
                                              <div class="custom-file">
                                                  <input type="file" required class="custom-file-input" required id="attachment_receipt_pembayaran" onchange="return fileValidation('attachment_receipt_pembayaran')" name="attachment_receipt_pembayaran">
                                                  <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Pilih Fail</label>
                                              </div>
                                          </div>
                                          <!-- pass id permohonan -->
                                          <input type="hidden" id="permohonan_id_resit"name="permohonan_id_resit" value="{{ $data->id  }}">
                                          <!-- Login button -->
                                          <button type="submit" class="btn btn-lg btn-primary btn-block mt-3">Muat Naik</button>
                                      </form>
                                  </div>

                                    <!-- <a href="#" class="btn btn-success mr-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-upload"></i></a> -->
                                </div>

                              </td>
                              @else
                              <td>
                                <button class="btn btn-success mr-1"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-upload"></i>
                                </button>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form action="{{route('user.upload.resit_pembayaran')}}" enctype="multipart/form-data" method="post" class="px-4 py-3">
                                        @csrf
                                        <h5>Muat Naik Resit Pembayaran</h5>
                                        <small>Saiz file tidak melebihi 100MB.</small>
                                        <!-- Upload Resit PEMBAYARaran -->
                                        <div class="input-group mt-3">
                                            <!-- <input type="file" onchange="return fileValidation('attachment_receipt_pembayaran')" class="form-control bg-light" id="attachment_receipt_pembayaran" name="attachment_receipt_pembayaran" aria-describedby="attachment_receipt_pembayaran"> -->
                                            <div class="custom-file">
                                                <input type="file" required class="custom-file-input" required id="attachment_receipt_pembayaran" onchange="return fileValidation('attachment_receipt_pembayaran')" name="attachment_receipt_pembayaran">
                                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Pilih Fail</label>
                                            </div>
                                        </div>
                                        <!-- pass id permohonan -->
                                        <input type="hidden" id="permohonan_id_resit"name="permohonan_id_resit" value="{{ $data->id  }}" readonly>
                                        <!-- Login button -->
                                        <button type="submit" class="btn btn-lg btn-primary btn-block mt-3">Muat Naik</button>
                                    </form>
                                </div>


                              </td>
                              @endif

                              @if($data->attachment_penerimaan_data == null)
                                <td>
                                  <div style="padding : 4px;"></div>
                                  Tiada
                                </td>
                              @else
                              <td>
                                <a class="btn btn-success mr-1" href="{{route('user.download.surat_penerimaan_data', $data->id)}}" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Muat turun Surat Penerimaan Data"><i class="fa fa-download"></i></a>
                              </td>
                              @endif

                              <!-- column muat naik surat penerimaan data -->

                              <td>
                                <div class="d-flex flex-row justify-content-around align-items-center">

                                  @if($data->attachment_penerimaan_data_user == null)
                                  <button class="btn btn-warning mr-1" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  @else
                                  <button class="btn btn-success mr-1" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  @endif
                                    <i class="fa fa-upload"></i>
                                  </button>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <form action="{{route('user.upload.surat_penerimaan_data')}}" enctype="multipart/form-data" method="post" class="px-4 py-3">
                                          @csrf
                                          <h5>Muat Naik Surat Penerimaan Data</h5>
                                          <small>Saiz file tidak melebihi 100MB.</small>
                                          <!-- Upload Resit PEMBAYARaran -->
                                          <div class="input-group mt-3">
                                              <!-- <input type="file" class="form-control bg-light" onchange="return fileValidation('attachment_surat_penerimaan_data')" id="attachment_surat_penerimaan_data" name="attachment_surat_penerimaan_data" aria-describedby="attachment_surat_penerimaan_data"> -->
                                              <div class="custom-file">
                                                  <input type="file" required class="custom-file-input" required id="attachment_surat_penerimaan_data" onchange="return fileValidation('attachment_surat_penerimaan_data')" name="attachment_surat_penerimaan_data">
                                                  <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Pilih Fail</label>
                                              </div>
                                          </div>
                                          <!-- pass id permohonan -->
                                          <input type="hidden" id="permohonan_id_surat" name="permohonan_id_surat" value="{{ $data->id  }}">
                                          <!-- Login button -->
                                          <button type="submit" class="btn btn-lg btn-primary btn-block mt-3">Muatnaik</button>
                                      </form>
                                    <!-- <a href="#" class="btn btn-success mr-1"><i class="fa fa-upload"></i></a> -->
                                </div>

                                </div>

                              </td>

                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>



                      </div>
                </div>
            </div>
        </main>
        <script type="text/javascript">
        $('#attachment_receipt_pembayaran').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

            $('#attachment_surat_penerimaan_data').on('change',function(){
                    //get the file name
                    var fileName = $(this).val();
                    //replace the "Choose a file" label
                    $(this).next('.custom-file-label').html(fileName);
                })
        </script>
@endsection
