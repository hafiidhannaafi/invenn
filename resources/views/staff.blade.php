@extends('layouts.master')
@section('content')
    {{-- @section('title', 'pengajuan')
@section('pengajuan', 'active')
@section('iconss-nav', 'show') --}}

    <main id="main" class="main">

        <div class="pagetitle">

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
                                         <a href="/cekdata" type="submit" class="btn btn"
                                        style=" float :center; background-color:   #012970; color:#FFFFFF"> cek barang</a>

                                  
                                    <a href="/peminjaman/form" type="submit" class="btn btn"
                                        style=" float :center; background-color:   #012970; color:#FFFFFF"> isi form</a>

                        </div>

                    </div><!-- End Card with an image on bottom -->

                </div>
            </div>

            </div>
            </div>
        </section>
    @endsection
