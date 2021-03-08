@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Laporan Mengikut Kategori Data Yang Tidak Diluluskan</div>

                  <div class="card-body">

                      <form class="" action="{{ route('laporan.laporan-6-tapis') }}" method="post">
                        @csrf
                        <div class="row pb-2">
                          <div class="col-md-1">

                          </div>
                          <div class="col-md">
                            <select id="select_tarikh" class="custom-select  bg-light @error('select_tarikh') is-invalid @enderror" name="select_tarikh" value="{{ old('select_tarikh') }}" required>
                              <option value="" selected disabled hidden>Pilih Jenis Tarikh</option>
                              <option value="permohonan" {{ old('select_tarikh') == "permohonan" ? 'selected' : '' }}>Tarikh Permohonan</option>
                              <option value="kelulusan" {{ old('select_tarikh') == "kelulusan" ? 'selected' : '' }}>Tarikh Tidak Lulus</option>
                            </select>
                          </div>
                          <div class="col-md-3">

                          </div>
                        </div>

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
                          <a href="{{ route('laporan.laporan-6') }}" class="btn btn-primary m-auto"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</a>
                        </div>
                      </div>

                    </form>
                    <div style="padding:10px;"></div>
                    <hr>
                    <div style="padding:10px;"></div>




                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="table-laporan" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">BIL</th>
                              <th class="all">KATEGORI PEMOHON</th>
                              <th class="all">NAMA PEMOHON</th>
                              <th class="all">NAMA AGENSI PEMOHON</th>
                              <th class="all">PERMOHON ID</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                              <th class="all">TARIKH TIDAK LULUS</th>

                            </tr>
                        </thead>
                        <tbody>
                          @foreach($permohonan as $laporan5)
                          <tr>
                            <td></td>

                            <td>
                              <div style="padding : 4px;"></div>
                              @if($laporan5->user->kategori != 'kementerian')
                              Kementerian
                              @elseif($laporan5->user->kategori != 'agensi')
                              Agensi
                              @elseif($laporan5->user->kategori != 'penyelidik')
                              Penyelidik
                              @elseif($laporan5->user->kategori != 'institut')
                              Institut Pengajian Tinggi
                              @elseif($laporan5->user->kategori != 'awam')
                              Orang Awam
                              @elseif($laporan5->user->kategori != 'dalaman')
                              Warga JPSM
                              @elseif($laporan5->user->kategori != 'lain')
                              Lain-lain
                              @endif
                            </td>

                            <td>
                              <div style="padding : 4px;"></div>
                              {{$laporan5->user->name}}
                            </td>

                            <td>
                              @if($laporan5->user->nama_kementerian != null)
                              {{$laporan5->user->nama_kementerian}}
                              @else
                              -
                              @endif
                            </td>

                            <td> {{$laporan5->getPermohonanID()}}</td>

                            <td>{{ Carbon\Carbon::parse($laporan5->tarikh_permohonan)->format('d-m-Y ') }}</td>

                            <td>{{ Carbon\Carbon::parse($laporan5->tarikh_ketua_pengarah)->format('d-m-Y ') }}</td>

                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                </div>
            </div>
        </main>

        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> -->

        <script src="{{ asset('qbadminui/js/vendor/DataTable-1.10.20/datatables.min.js') }}"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

        <!-- <script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script> -->
        <!-- <script src="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"></script> -->
        <script type="text/javascript">
          $(document).ready(function() {
          var t = $('#example').DataTable( {
              "columnDefs": [ {
                  "searchable": false,
                  "orderable": false,
                  "targets": 0
              } ],
              "order": [[ 1, 'asc' ]]
          } );

          t.on( 'order.dt search.dt', function () {
              t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                  cell.innerHTML = i+1;
              } );
          } ).draw();
        } );
        </script>

        <script type="text/javascript">
        // Responsive Data Table
        let tablelaporan = $("#table-laporan")
        var t = $(tablelaporan).DataTable({
          "responsive" : true,
          "dom": 'Bfrtip',
          "buttons": [
              'excel',
              {
                  extend: 'pdfHtml5',
                  orientation: 'landscape',
                  pageSize: 'A4',
                  title: 'Laporan Mengikut Kategori Data Yang Tidak Diluluskan',
              },
              {
                  extend: 'print',
                  text: 'Cetak',
                  pageSize: 'LEGAL',
                  title: 'Laporan Mengikut Kategori Data Yang Tidak Diluluskan',
                  customize: function(win)
                  {

                      var last = null;
                      var current = null;
                      var bod = [];

                      var css = '@page { size: landscape; }',
                          head = win.document.head || win.document.getElementsByTagName('head')[0],
                          style = win.document.createElement('style');

                      style.type = 'text/css';
                      style.media = 'print';

                      if (style.styleSheet)
                      {
                        style.styleSheet.cssText = css;
                      }
                      else
                      {
                        style.appendChild(win.document.createTextNode(css));
                      }

                      head.appendChild(style);
               },
              },
          ],
          "scrollX": true,
          "columnDefs": [ {
              "searchable": false,
              "orderable": false,
              "targets": 0
          } ],
          "order": [[ 1, 'asc' ]],
          "language": {
              "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
              "zeroRecords": "Maaf, tiada rekod.",
              "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
              "infoEmpty": "Tidak ada rekod yang tersedia",
              "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
              "search": "Carian",
              "previous": "Sebelum",
              "paginate": {
                  "first":      "Pertama",
                  "last":       "Terakhir",
                  "next":       "Seterusnya",
                  "previous":   "Sebelumnya"
              },
          },
            responsive : true,
            columnDefs: [
                         {
                              "targets": "_all", // your case first column
                              "className": "text-center",
                         },
                       ],
        });

        t.on('order.dt search.dt', function () {
             t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                   cell.innerHTML = i+1;
                   t.cell(cell).invalidate('dom');
             });
        }).draw();

        </script>

        <script type="text/javascript">
        function fileValidation(name){
          var fileInput = document.getElementById(name);
          var filePath = fileInput.value;
          var allowedExtensions = /(\.pdf|\.doc|\.docx|\.xls|\.xlsx|\.jpeg|\.jpg|\.png|\.zip|\.rar)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert('Sila muatnaik file dalam format .pdf , .doc , .docx , .jpeg , .jpg , .png , .zip dan .rar sahaja.');
              fileInput.value = '';
              return false;
          }
        }

        $('#attachment_surat_gagal').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

        $('#attachment_surat_gagal').on('change', function() {
              var numb = $(this)[0].files[0].size/102400 /102400 ;
              numb = numb.toFixed(2);
              if(numb > 2){
              alert('Ralat! Fail anda melebihi 100MB. Saiz fail anda adalah: ' + numb +' MB');
              document.getElementById("attachment_permohonan").value = "";
              var fileName = "";
              $(this).next('.custom-file-label').html(fileName);
              return false;
              }
            });

        function passId_upload_surat_gagal(id){
          $(".modal-body #permohonan_id_upload_surat_bayaran").val( id );
        }
        </script>
@endsection
