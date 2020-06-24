@extends('layouts.app')+
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

                      <form action="{{route('senarai-harga.insert')}}" method="post">
                        @csrf
                        <div class="card-title">Tambah Harga</div>
                        <!-- jenis data input-->
                        <div class="form-group">
                            <label for="select-1">Jenis Data:</label>
                              <select id="select-1" class="custom-select  bg-light" name="jenis_data">
                                  <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                  <option value="Vector" {{ old('jenis_data') == "Vector" ? 'selected' : '' }}>Vector</option>
                                  <option value="Digitize" {{ old('jenis_data') == "Digitize" ? 'selected' : '' }}>Digitize</option>
                                  <option value="Option3" {{ old('jenis_data') == "Option3" ? 'selected' : '' }}>Option 3</option>
                              </select>
                              @error('jenis_data')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                        </div>
                          <!-- saiz data input -->
                          <div class="form-group">
                              <label for="saiz_data">Saiz Data:</label>
                              <input type="text" class="form-control bg-light" id="saiz_data" name="saiz_data" aria-describedby="saiz_data" placeholder="Masukkan Saiz Data" value="{{ old('saiz_data') }}">
                              <small id="saiz_data" class="form-text text-secondary">Size data dalam format MB (Contoh: 120.2)</small>
                              @error('saiz_data')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <!-- negeri input -->
                          <div class="form-group">
                            <label for="select-1">Negeri:</label>
                              <select id="select-1" class="custom-select  bg-light" name="negeri">
                                  <option value="" selected disabled hidden>Pilih Negeri</option>
                                  <option value="Johor" {{ old('negeri') == "Johor" ? 'selected' : '' }}>Johor</option>
                                  <option value="Kedah" {{ old('negeri') == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                  <option value="Kelantan" {{ old('negeri') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                  <option value="Melaka" {{ old('negeri') == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                  <option value="Negeri Sembilan" {{ old('Negeri Sembilan') == "Johor" ? 'selected' : '' }}>Negeri Sembilan</option>
                                  <option value="Pahang" {{ old('negeri') == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                  <option value="Pulau Pinang" {{ old('negeri') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                  <option value="Perak" {{ old('negeri') == "Perak" ? 'selected' : '' }}>Perak</option>
                                  <option value="Perlis" {{ old('negeri') == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                  <option value="Sabah" {{ old('negeri') == "Sabah" ? 'selected' : '' }}>Sabah</option>
                                  <option value="Sarawak" {{ old('negeri') == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                                  <option value="Selangor" {{ old('negeri') == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                  <option value="Terengganu" {{ old('negeri') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                  <option value="Kuala Lumpur" {{ old('negeri') == "Kuala Lumpur" ? 'selected' : '' }}>Kuala Lumpur</option>
                                  <option value="Labuan" {{ old('negeri') == "Labuan" ? 'selected' : '' }}>Labuan</option>
                                  <option value="Putrajaya" {{ old('negeri') == "Putrajaya" ? 'selected' : '' }}>Putrajaya</option>
                              </select>
                              @error('negeri')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>

                          <!--tahun input -->
                          <div class="form-group">
                              <label for="tahun">Tahun:</label>
                              <input type="text" class="form-control bg-light" name="tahun" id="tahun" aria-describedby="tahun" placeholder="Masukkan Tahun" value="{{ old('tahun') }}">
                              @error('tahun')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>

                          <!--harga asas input -->
                          <div class="form-group">
                              <label for="harga_asas">Harga Asas : RM</label>
                              <input type="text" class="form-control bg-light" name="harga_asas" id="harga_asas" aria-describedby="harga_asas" placeholder="Masukkan Harga Asas (RM)" value="{{ old('harga_asas') }}">
                              <small id="harga_asas" class="form-text text-secondary">Contoh: 120.20</small>
                              @error('harga_asas')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>

                          <!--jumlah harga input -->
                          <div class="form-group">
                              <label for="jumlah_harga">Jumlah Harga : RM</label>
                              <input type="text" class="form-control bg-light" name="jumlah_harga" id="jumlah_harga" aria-describedby="jumlah_harga" placeholder="Masukkan Jumlah Harga (RM)" value="{{ old('jumlah_harga') }}">
                              <small id="jumlah_harga" class="form-text text-secondary">Contoh: 120.20</small>
                          </div>
                          @error('jumlah_harga')
                          <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                          </div>
                          @enderror
                          <button type="submit" class="btn btn-primary">Tambah</button>

                      </form>
                </div>
            </div>
        </main>
@endsection
