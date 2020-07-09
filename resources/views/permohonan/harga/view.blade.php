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
                      <div class="card-title">Paparan Harga Permohonan</div>
                      <form  action="" method="post">
                        @csrf
                        <!-- paparan harga input -->
                        <div class="form-group" >
                            <label for="actionBarName1">Jenis Dokumen:</label>
                            <input type="text" class="form-control bg-light" name="jenis_dokumen" id="jenis_dokumen" aria-describedby="jenis_dokumen"  value="{{ $permohonan->jenis_dokumen  }}" readonly>
                        </div>

                        <div class="form-group" >
                            <label for="actionBarName1">Jenis Data:</label>
                            <input type="text" class="form-control bg-light" name="jenis_data" id="jenis_data" aria-describedby="jenis_data"  value="{{ $permohonan->jenis_data  }}" readonly>
                        </div>



                        @if($permohonan->jenis_data == 'Petak Kajian')
                        <div class="form-group" >
                            <label for="actionBarName1">Kategori Data:</label>
                            <input type="text" class="form-control bg-light" name="kategori_data" id="kategori_data" aria-describedby="kategori_data"  value="{{ $permohonan->kategori_data}}" readonly>
                        </div>
                        @elseif($permohonan->jenis_data != 'Petak Kajian')
                        <div class="form-group">
                            <label for="actionBarName1">Tahun:</label>
                            <input type="text" class="form-control bg-light" name="tahun" id="tahun" aria-describedby="tahun"  value="{{ $permohonan->tahun}}" readonly>
                        </div>
                        @endIf

                        <div class="form-group" >
                            <label for="actionBarName1">Negeri:</label>
                            <input type="text" class="form-control bg-light" name="negeri" id="negeri" aria-describedby="negeri"  value="{{ $permohonan->negeri  }}" readonly>
                        </div>

                        <div class="form-group" >
                            <label for="actionBarName1">Adakah dokumen ini perlu dibawa ke luar negara?</label>
                            <input type="text" class="form-control bg-light" name="dokumen_ke_luar_negara" id="dokumen_ke_luar_negara" aria-describedby="dokumen_ke_luar_negara"  value="{{ $permohonan->dokumen_ke_luar_negara  }}" readonly>
                        </div>

                        @if($permohonan->jenis_dokumen == 'Vektor Shapefile')
                        <div class="form-group" >
                            <label for="actionBarName1">Saiz Data:</label>
                            <input type="text" class="form-control bg-light" name="jenis_data" id="saiz_data" aria-describedby="saiz_data"  value="{{ $harga->saiz_data  }}" >
                        </div>
                        @endif

                        <div class="form-group" >
                            <label for="actionBarName1">Harga asas: RM</label>
                            <input type="text" class="form-control bg-light" name="harga_asas" id="harga_asas" aria-describedby="harga_asas"  value="{{ $harga->harga_asas  }}" readonly>
                        </div>

                        <div class="form-group" >
                            <label for="actionBarName1">Harga AOI: RM</label>
                            <input type="text" class="form-control bg-light" name="harga_aoi" id="harga_aoi" aria-describedby="harga_aoi"  value="" >
                        </div>

                        <div class="form-group" >
                            <label for="actionBarName1">Harga tambahan: RM</label>
                            <input type="text" class="form-control bg-light" name="harga_tambahan" id="harga_tambahan" aria-describedby="harga_tambahan"  value="" >
                        </div>







                      </form>



                </div>
            </div>
        </main>
@endsection
