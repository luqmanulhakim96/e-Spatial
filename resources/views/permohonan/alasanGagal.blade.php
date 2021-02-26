@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                    <form class="" action="{{route('permohonan.submitAlasan', $permohonan_id)}}" method="post">
                    @csrf
                        <div class="card-title" style="text-align: center;">Sebab Permohonan Gagal</div>

                        <div class="row">
                          <div class="col-md-2">
                          </div>

                          <div class="col-md">
                            <div class="form-group">
                              <textarea id="sebab_gagal" class="form-control bg-light" name="sebab_gagal" rows="15" cols="50" ></textarea>
                            </div>
                          </div>

                          <div class="col-md-2">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-5">

                          </div>
                          <div class="col-md">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Hantar borang ini?');">Hantar Sebab</button>
                          </div>
                          <div class="col-md-4">

                          </div>
                        </div>

                    </form>
                  </div>
                </div>
            </div>
        </main>

@endsection
