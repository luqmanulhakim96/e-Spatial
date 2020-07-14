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
                      <form  action="{{route('permohonan.harga.update',$dataPermohonan)}}" method="post">
                        @csrf
                        <!-- Light table Head card -->
                        <div class="card rounded-lg">
                            <div class="card-body">
                                <div class="card-title">Senarai Data Yang Dipohon</div>
                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th width="20%"><p class="mb-0">JENIS DOKUMEN</p></th>
                                                <th width="25%"><p class="mb-0">JENIS DATA</p></th>
                                                <th width="15%"><p class="mb-0">TAHUN/KATEGORI DATA</p></th>
                                                <th width="15%"><p class="mb-0">NEGERI</p></th>
                                                <th width="15%"><p class="mb-0">SAIZ DATA</p></th>
                                                <th width="15%"><p class="mb-0">JUMLAH HARGA ASAS (RM)</p></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          @foreach($senaraiHargaUser as $data)
                                          <tr>
                                            <td><p class="mb-0 font-weight-bold">{{ $data[0]->jenis_dokumen}}</p></td>
                                            <td><p class="mb-0 font-weight-bold">{{ $data[0]->jenis_data}}</p></td>
                                            <td><p class="mb-0 font-weight-bold">{{ $data[0]->tahun}}{{ $data[0]->kategori_data}}</p></td>
                                            <td><p class="mb-0 font-weight-bold">{{ $data[0]->negeri}}</p></td>
                                            @if($data[0]->saiz_data != NULL)
                                            <td><input type="text" id="harga" name="saiz_data[]" value="{{ $data[0]->saiz_data}}"></td>
                                            @else
                                            <td> - <input type="hidden" id="harga" name="saiz_data[]" value="1"></td>
                                            @endif
                                            <td><input type="text" id="harga" name="harga_asas[]" value="{{ $data[0]->harga_asas}}" readonly></td>
                                          </tr>
                                          @endforeach

                                        </tbody>
                                    </table>
                                    @error('saiz_data')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="card rounded-lg">
                          <div class="card-body">
                              <div class="card-title">Lain-lain Harga</div>

                              <div class="form-group">
                                  <label for="harga_asas">Harga AOI: RM</label>
                                  <input type="text" class="form-control bg-light" name="harga_aoi" id="harga_aoi" aria-describedby="harga_aoi" placeholder="Masukkan Harga AOI)">
                                  <small id="harga_aoi" class="form-text text-secondary">Contoh: 120.20</small>
                                  @error('harga_aoi')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>

                              <div class="form-group">
                                  <label for="harga_asas">Harga Lain-lain: RM</label>
                                  <input type="text" class="form-control bg-light" name="harga_lain" id="harga_lain" aria-describedby="harga_lain" placeholder="Masukkan Harga Lain-lain)">
                                  <small id="harga_lain" class="form-text text-secondary">Contoh: 120.20</small>
                                  @error('harga_lain')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>

                              <button type="submit" class="btn btn-primary">Update Harga</button>
                          </div>

                        </div>


                      </form>
                </div>
            </div>
        </main>
@endsection
