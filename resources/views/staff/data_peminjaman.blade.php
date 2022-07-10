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
                        <div class="card-body">
                            <h5 class="card-title"> Detail Peminjaman Barang </h5>


                            @foreach ($peminjaman as $p)
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 1. Kode Peminjaman</div>
                                    <div class="col-lg-7 col-md-8"> :{{ $p->kode_peminjaman }} </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 2. Nama peminjam </div>
                                    <div class="col-lg-7 col-md-8"> :{{ $p->nama_peminjam }} </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 3. Jenis peminjam </div>
                                    <div class="col-lg-7 col-md-8"> : {{ $p->jenis_peminjaman }} </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 4. Tanggal pengajuan</div>
                                    <div class="col-lg-7 col-md-8">
                                        <td>: <?php echo date('d F Y', strtotime($p->tgl_pengajuan)); ?> </td>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 5. Tanggal peminjaman </div>
                                    <div class="col-lg-7 col-md-8">
                                        <td> :<?php echo date('d F Y', strtotime($p->tgl_pinjam)); ?> </td>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 6. Tanggal pengembalian</div>
                                    <div class="col-lg-7 col-md-8">
                                        <td> : <?php echo date('d F Y', strtotime($p->tgl_kembali)); ?> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 7. Surat Pengantar</div>
                                    <div class="col-lg-7 col-md-8"> <a href="{{ url('/download', $p->surat_pinjam) }}"
                                            style="  background-color:   #012970; color:#FFFFFF" button type="button"
                                            class="btn btn-sm"><i class="ri-printer-line"></i> {{ $p->surat_pinjam }}</a>
                                    </div>
                                </div>
                            @endforeach

                            <h5 class="card-title"> Detail Barang </h5>
                            <?php
                            $nomor = 1;
                            ?>
                            @foreach ($data as $d)
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label"> Barang {{ $nomor++ }} </div>

                                    <div class="col-lg-7 col-md-8"> : {{ $d->barangs->kode }} -
                                        {{ $d->barangs->jenis_barangs->jenis_barang }}
                                        {{ $d->barangs->spesifikasi }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> Jumlah item </div>
                                    <div class="col-lg-7 col-md-8"> : {{ $d->jumlah_pinjam }} </div>
                                </div>
                            @endforeach
                            <br>
                            <a href="/peminjaman/pengajuan "
                                style=" float :left; background-color:   #012970; color:#FFFFFF" button type="button"
                                class="btn btn-sm">Kembali</a>

                        </div>
                    </div><!-- End Default Card -->


                </div>
            </div>

            </div>
            </div>
        </section>
    @endsection
