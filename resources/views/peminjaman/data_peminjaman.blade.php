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


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Peminjaman </h5>
                            <!-- Default Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"> Detail Barang Pinjam </h5>

                                    {{-- @php
                                        $status = App\Models\Peminjaman::where('kode_peminjaman', $data->kode_peminjaman)->first();
                                    @endphp --}}

                                    {{-- <div class="row">
                                        <div class="col-lg-5 col-md-4 label "> Jumlah item : </div>
                                        <div class="col-lg-7 col-md-8"> {{ $status->nama_peminjam }} </div>
                                    </div> --}}

                                    @foreach ($data as $d)
                                        <p class="card-text">

                                        <div class="row">
                                            <div class="col-lg-5 col-md-8 label ">Barang : </div>
                                            <div class="col-lg-7 col-md-8"> {{ $d->barangs->kode }} -
                                                {{ $d->barangs->jenis_barangs->jenis_barang }}
                                                {{ $d->barangs->spesifikasi }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 label "> Jumlah item : </div>
                                            <div class="col-lg-7 col-md-8"> {{ $d->jumlah_pinjam }} </div>
                                        </div>
                                    @endforeach
                                    <br>
                                    <a href="/peminjaman/pengajuan "
                                        style=" float :left; background-color:   #012970; color:#FFFFFF" button
                                        type="button" class="btn btn-sm">Kembali</a>

                                </div>
                            </div><!-- End Default Card -->



                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endsection
