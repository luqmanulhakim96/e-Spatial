@extends('layouts.app')

@section('content')
    <div class="login-page d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <!-- <div class="card rounded-sm mt-4 w-50 p-3"> -->
        <div class="card rounded-sm mt-5 w-50 p-3">
        <h5 class="card-header">Halaman Utama</h5>

          <a class="btn btn-primary m-2" href="{{ route('user.add') }}">Permohonan Baru</a>
          <a class="btn btn-primary m-2" href="{{ route('user.list') }}">Senarai Pemohonan</a>



        </div>


    </div>
@endsection
