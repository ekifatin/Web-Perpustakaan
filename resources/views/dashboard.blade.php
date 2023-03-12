@extends('Index')
@section('content')
<main class="db-lineardb">
    <div class="container-fluid px-4">
                            <h1 class="mt-4 text-secondary">Dashboard</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active"></li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success text-white mb-4">
                                        <div class="card-body text-center">
                                            <h3 style="font-size:50px">{{ $buku_tersedia }}</h3>
                                            <p style="font-size:20px"><a href="#" class="text-white text-decoration-none">Buku Tersedia</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body text-center">
                                            <h3 style="font-size:50px">{{ $buku_tidak_tersedia }}</h3>
                                            <p style="font-size:20px"><a href="#" class="text-white text-decoration-none">Buku Tidak Tersedia</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-danger text-white mb-4">
                                        <div class="card-body text-center">
                                            <h3 style="font-size:50px">{{ $jumlah_user }}</h3>
                                            <p style="font-size:20px"><a href="/user" class="text-white text-decoration-none">Jumlah Pengguna</a></p>
                                        </div>
                                    </div>
                                </div>                     
                                
@endsection
    

