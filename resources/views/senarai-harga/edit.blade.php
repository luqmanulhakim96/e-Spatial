@extends('layouts.app')+
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small>
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Edit Harga</div>

                      <form  action="{{route('senarai-harga.update', $info->id)}}" method="post">
                        @csrf
                        <!-- jenis data input-->
                        <div class="form-group">
                            <label for="select-1">Jenis Data:</label>
                              <select id="jenis_data" class="custom-select  bg-light" name="jenis_data" >
                                  <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                  <option value="Vector" {{ $info->jenis_data === "Vector" ? 'selected' : '' }}>Vector</option>
                                  <option value="Digitize" {{ $info->jenis_data === "Digitize" ? 'selected' : '' }}>Digitize</option>
                                  <option value="Option3" {{ $info->jenis_data === "Option3" ? 'selected' : '' }}>Option 3</option>
                              </select>
                        </div>
                          <!-- saiz data input -->
                          <div class="form-group">
                              <label for="actionBarName1">Saiz Data:</label>
                              <input type="text" class="form-control bg-light" name="saiz_data" id="saiz_data" aria-describedby="saiz_data" placeholder="Masukkan Saiz Data (MB)" value="{{ $info->saiz_data  }}">
                              <small id="actionBarName1Help" class="form-text text-secondary">Size data dalam format MB (Contoh: 120.2)</small>
                          </div>
                          <!-- negeri input -->
                          <div class="form-group">
                            <label for="select-1">Negeri:</label>
                              <select id="negeri" class="custom-select  bg-light" name="negeri">
                                <option value="" selected disabled hidden>Pilih Negeri</option>
                                <option value="Johor" {{  $info->negeri == "Johor" ? 'selected' : '' }}>Johor</option>
                                <option value="Kedah" {{ $info->negeri == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                <option value="Kelantan" {{ $info->negeri == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                <option value="Melaka" {{ $info->negeri == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                <option value="Negeri Sembilan" {{ $info->negeri == "Johor" ? 'selected' : '' }}>Negeri Sembilan</option>
                                <option value="Pahang" {{ $info->negeri == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                <option value="Pulau Pinang" {{ $info->negeri == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                <option value="Perak" {{ $info->negeri == "Perak" ? 'selected' : '' }}>Perak</option>
                                <option value="Perlis" {{ $info->negeri== "Perlis" ? 'selected' : '' }}>Perlis</option>
                                <option value="Sabah" {{ $info->negeri == "Sabah" ? 'selected' : '' }}>Sabah</option>
                                <option value="Sarawak" {{ $info->negeri == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                                <option value="Selangor" {{ $info->negeri == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                <option value="Terengganu" {{$info->negeri == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                <option value="Kuala Lumpur" {{ $info->negeri == "Kuala Lumpur" ? 'selected' : '' }}>Kuala Lumpur</option>
                                <option value="Labuan" {{ $info->negeri == "Labuan" ? 'selected' : '' }}>Labuan</option>
                                <option value="Putrajaya" {{ $info->negeri == "Putrajaya" ? 'selected' : '' }}>Putrajaya</option>
                              </select>
                          </div>

                          <!--tahun input -->
                          <div class="form-group">
                              <label for="actionBarName1">Tahun:</label>
                              <input type="text" name="tahun" class="form-control bg-light" id="tahun" aria-describedby="tahun" placeholder="Masukkan Tahun" value="{{ $info->tahun  }}">
                          </div>

                          <!--harga asas input -->
                          <div class="form-group">
                              <label for="actionBarName1">Harga Asas : RM</label>
                              <input type="text" name="harga_asas" class="form-control bg-light" id="harga_asas" aria-describedby="harga_asas" placeholder="Masukkan Harga Asas (RM)" value="{{ $info->harga_asas  }}">
                              <small id="actionBarName1Help" class="form-text text-secondary">Contoh: 120.20</small>
                          </div>

                          <!--jumlah harga input -->
                          <div class="form-group">
                              <label for="actionBarName1">Jumlah Harga : RM</label>
                              <input type="text" name="jumlah_harga" class="form-control bg-light" id="jumlah_harga" aria-describedby="jumlah_harga" placeholder="Masukkan Jumlah Harga (RM)" value="{{ $info->jumlah_harga  }}">
                              <small id="actionBarName1Help" class="form-text text-secondary">Contoh: 120.20</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Edit</button>

                      </form>

                </div>
            </div>
        </main>
@endsection
