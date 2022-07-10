@extends('layouts.master')
@section('content')
    {{-- @section('title', 'pengajuan')
@section('pengajuan', 'active')
@section('iconss-nav', 'show') --}}

    <main id="main" class="main">

        <div class="pagetitle">
            {{-- <h1>Data Jenis Aset</h1> --}}
            {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav> --}}
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row align-items-top">
                <div class="col-lg-14">



                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body"><br>
                            <center> <img src="admin/logo-lptp.png" class="card-img-bottom" style="width: 90px;"
                                    alt="...">
                                <center>
                                    <h5 class="card-title text-center pb-0 fs-4">Selamat Datang {{ auth()->user()->name }}
                                    </h5>
                                    <h5 class="card-title">Sistem Informasi Inventaris Barang Lembaga Pengembangan Pedesaan
                                        (LPTP) Surakarta</h5>
                                    {{-- <h5 class="card-title"> Lembaga Pengembangan Pedesaan (LPTP) Surakarta</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        </div>

                    </div><!-- End Card with an image on bottom -->

                </div>
            </div>

            </div>
            </div>
        </section>
    @endsection
