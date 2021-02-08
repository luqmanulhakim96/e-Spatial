@extends('layouts.app_user_eng')
@section('content')
      <!--Page Body part -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="page-body p-4 text-dark">
              <div class="theme-option p-3 border-1" style="border: 1px solid;border-color: #003e61 !important;">
                  <div class="theme-pck">
                      <i class="fa fa-globe" aria-hidden="true" style="font-size: 180% !important;"></i>
                  </div>
                  <p style="font-size: 110%;">Pilih Bahasa | Choose Language</p>
                  <div class="row">
                    <div class="col-md">
                      <div class="btn-group">
                          <!-- <button class="btn btn-primary">Bahasa Melayu</button> -->
                          <a href="{{ route('user.list') }}" class="btn btn-outline-primary">Bahasa Melayu</a>
                          <button class="btn btn-primary">English</button>
                          <!-- <a href="{{ route('user.list_eng') }}" class="btn btn-outline-primary">English</a> -->
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
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">List of Passed Application</div>

                  <div class="card-body">
                      <div class="row">
                        <div class="col-md">
                          <div class="card-header" style="text-align: justify; text-justify: inter-word; border: 1px solid black;">
                            <h6 >Important:</h6>
                            <span>If there is no action from the applicant within 30 days from the date of approval, the application will be automatically canceled</span><br>

                          </div>
                        </div>
                      </div>
                      <div style="padding: 10px;"></div>

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_user_lulus_eng" style="width: 100%;">
                          <!-- Table head -->
                          <thead>
                              <tr>
                                <th class="all">APPLICATION ID</th>
                                <th class="all">DATE OF APPLICATION</th>
                                <th class="all">DOWNLOAD APPROVAL LETTER</th>
                                <th class="all">DOWNLOAD DATA ACCEPTANCE FORM</th>
                                <th class="all">TOTAL PAYMENT</th>
                                <th class="all">PAYMENT STATUS</th>
                                <th class="all">UPLOAD PAYMENT RECEIPT</th>
                                <th class="all">UPLOAD DATA ACCEPTANCE FORM</th>
                                <th class="all">APPLICANT ACTION</th>
                                <th class="all">LINK GEOSPATIAL DATA </th>
                              </tr>
                          </thead>
                          <!-- Table body -->
                          <tbody>
                            @foreach($list_lulus as $key => $data)
                            <tr>
                              <td>
                                <div style="padding : 4px;"></div>
                                {{ $data->getPermohonanID()  }}
                              </td>

                              <td>
                                <div style="padding : 4px;"></div>
                                {{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i:s') }}
                              </td>

                              @if($data->attachment_surat_bayaran == null)

                              <td>
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

                              <td>
                                <div style="padding : 4px;"></div>
                                RM {{ $data->jumlah_bayaran  }}
                              </td>

                              @if($data->status_pembayaran == 'Pengecualian Bayaran')
                              <td>
                                <div style="padding : 4px;"></div>
                                <span class="badge badge-primary badge-pill" style="font-size: 100%;">Payment Exemption</span>
                              </td>
                              @elseif($data->status_pembayaran == 'Berbayar')
                              <td>
                                <div style="padding : 4px;"></div>
                                <span class="badge badge-warning badge-pill" style="font-size: 100%;">Payment Pending</span>
                              </td>
                              @elseif($data->status_pembayaran == 'Sudah Dibayar')
                              <td>
                                <div style="padding : 4px;"></div>
                                <span class="badge badge-success badge-pill" style="font-size: 100%;">Payment Accepted</span>
                              </td>
                              @endif


                              <!-- column muat naik receipt pembayaran -->
                              @if($data->attachment_receipt_pembayaran == null)
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                @if($data->status_pembayaran == 'Berbayar' && $data->attachment_receipt_pembayaran == null)
                                <td>
                                <button class="btn btn-warning mr-1" onclick="passId_upload_link_data({{ $data->id  }})" data-id="" data-toggle="modal"  data-target="#upload_resit_model"><i class="fa fa-upload"></i></button>
                                </td>
                                @else
                                <td>
                                <button class="btn btn-dark mr-1" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="No need to upload data"><i class="fa fa-upload"></i></button>
                                </td>
                                @endif
                            </div>
                              @else


                                @if($data->status_pembayaran == 'Berbayar' && $data->attachment_receipt_pembayaran == null)
                                <td>
                                <button class="btn btn-warning mr-1" onclick="passId_upload_link_data({{ $data->id  }})" data-id="" data-toggle="modal"   data-target="#upload_resit_model"><i class="fa fa-upload"></i></button>
                                </td>

                                @elseif($data->status_pembayaran == 'Pengecualian Bayaran')
                                <td>
                                <button class="btn btn-dark mr-1" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="No need to upload data"><i class="fa fa-upload"></i></button>
                                </td>
                                @elseif($data->status_pembayaran == 'Sudah Dibayar' || $data->attachment_receipt_pembayaran != null)

                                <td><button class="btn btn-success mr-1" onclick="passId_upload_link_data({{ $data->id  }})" data-id="" data-toggle="modal"   data-target="#upload_resit_model"><i class="fa fa-upload"></i></button></td>
                                @endif

                              </div>
                              @endif



                              <!-- column muat naik surat penerimaan data -->



                                  @if($data->attachment_penerimaan_data_user == null)
                                  <td>
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                      <button class="btn btn-warning mr-1" onclick="passId_upload_borang({{ $data->id  }})" data-id="" data-toggle="modal"  data-target="#upload_borang_akuan_penerimaan_data"><i class="fa fa-upload"></i></button>
                                    </div>
                                  </td>
                                  @else
                                  <td>
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                      <button class="btn btn-success mr-1" onclick="passId_upload_borang({{ $data->id  }})" data-id="" data-toggle="modal"  data-target="#upload_borang_akuan_penerimaan_data"><i class="fa fa-upload"></i></button>
                                    </div>
                                  </td>
                                  @endif

                                  <td>
                                    @if($data->status_pembayaran == "Berbayar" && $data->attachment_receipt_pembayaran == null)
                                    <span>- Upload Payment Receipt</span><br>
                                    @endif

                                    @if($data->attachment_penerimaan_data_user == null)
                                    <span>- Upload Data Acceptance Form</span><br>
                                    @endif

                                    @if($data->status_pembayaran == "Sudah Dibayar" && $data->attachment_receipt_pembayaran != null && $data->attachment_penerimaan_data_user != null)
                                    <div style="padding : 4px;"></div>
                                    <span>Completed</span><br>
                                    @endif

                                    @if($data->status_pembayaran == "Pengecualian Bayaran" &&  $data->attachment_penerimaan_data_user != null)
                                    <div style="padding : 4px;"></div>
                                    <span>Completed</span><br>
                                    @endif
                                  </td>

                                  @if($data->link_data != null)
                                  <td>
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                      <a href="//{{$data->link_data}}" class="btn btn-success mr-1"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                  </td>
                                  @else
                                  <td>
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                      <button class="btn btn-dark mr-1"><i class="fa fa-external-link" aria-hidden="true"></i></button>
                                    </div>
                                  </td>
                                  @endif

                                  <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <form action="{{route('user.upload.surat_penerimaan_data')}}" enctype="multipart/form-data" method="post" class="px-4 py-3">
                                          @csrf
                                          <h5>Muat Naik Surat Penerimaan Data</h5>
                                          <small>Saiz file tidak melebihi 100MB.</small>
                                          <div class="input-group mt-3">
                                              <div class="custom-file">
                                                  <input type="file" required class="custom-file-input" required id="attachment_surat_penerimaan_data" onchange="return fileValidation('attachment_surat_penerimaan_data')" name="attachment_surat_penerimaan_data">
                                                  <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Pilih Fail</label>
                                              </div>
                                          </div>
                                          <input type="hidden" id="permohonan_id_surat" name="permohonan_id_surat" value="{{ $data->id  }}">
                                          <button type="submit" class="btn btn-lg btn-primary btn-block mt-3">Muatnaik</button>
                                      </form>
                                </div> -->





                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                      <div class="modal fade" id="upload_borang_akuan_penerimaan_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Data Acceptance Form</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('user.upload.surat_penerimaan_data')}}" id="form_borang" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body">

                                <div class="input-group mt-3">
                                    <div class="custom-file">
                                        <input type="file" required class="custom-file-input" required id="attachment_surat_penerimaan_data" onchange="return fileValidation('attachment_surat_penerimaan_data')" name="attachment_surat_penerimaan_data">
                                        <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose File</label>
                                    </div>
                                </div>

                                  <input type="hidden" id="permohonan_id_surat" name="permohonan_id_surat" value="">
                                  <input type="hidden" name="language" value="english">


                              </div>
                              <div class="modal-footer">
                                  <button type="submit"  class="btn btn-primary">Upload</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="upload_resit_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Payment Receipt</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('user.upload.resit_pembayaran')}}" id="form_resit" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body">

                                <div class="input-group mt-3">

                                    <div class="custom-file">
                                        <input type="file" required class="custom-file-input" required id="attachment_receipt_pembayaran" onchange="return fileValidation('attachment_receipt_pembayaran')" name="attachment_receipt_pembayaran">
                                        <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose File</label>
                                    </div>
                                </div>

                                  <input type="hidden" id="permohonan_id_resit" name="permohonan_id_resit" value="">
                                  <input type="hidden" name="language" value="english">

                              </div>
                              <div class="modal-footer">
                                  <button type="submit"  class="btn btn-primary" >Upload</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>



                      </div>
                </div>
            </div>
        </main>
        <script type="text/javascript">

        function passId_upload_link_data(id){
          $(".modal-body #permohonan_id_resit").val( id );
        }

        function passId_upload_borang(id){
          $(".modal-body #permohonan_id_surat").val( id );
        }

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

        function fileValidation(name){
          var fileInput = document.getElementById(name);
          var filePath = fileInput.value;
          var allowedExtensions = /(\.pdf|\.doc|\.docx|\.xls|\.xlsx|\.jpeg|\.jpg|\.png|\.zip|\.rar)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert('Please upload file in format .pdf , .doc , .docx , .jpeg , .jpg , .png , .zip dan .rar only.');
              fileInput.value = '';
              return false;
            }
        }
        </script>
@endsection
