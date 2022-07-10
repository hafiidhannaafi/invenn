@extends('layouts.master')
@section('content')

@section('title', 'barangmasuk')
@section('barangmasuk', 'active')
@section('charts-nav', 'show')

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
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Barang Masuk</h5>

                        {{-- <a href="/barang-masuk/form" type="button"  class="btn btn" style="background-color:  #012970; color:#FFFFFF">Tambah</a> --}}
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    {{-- <th scope="col">Kode</th> --}}
                                    <th scope="col">Nama</th>
                                    {{-- <th scope="col">Tipe/ Spesifik</th> --}}
                                    <th scope="col">Tgl masuk</th>
                                    <th scope="col">Jumlah Satuan</th>
                                    <th scope="col">supplier</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Ket</th>
                                    {{-- <th scope="col">Aksi</th> --}}
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                @foreach ($barangmasuk as $data)
                                    <tr>
                                        <th>{{ $nomor++ }}</th>
                                        <td> {{ $data->barangs->kode }} -
                                            {{ $data->barangs->jenis_barangs->jenis_barang }}
                                            {{ $data->barangs->spesifikasi }} </td>
                                        <td> {{ $data->tanggal_masuk }}</td>
                                        <td> {{ $data->jumlah_masuk }}</td>
                                        <td> {{ $data->supplier }}</td>
                                        <td> {{ $data->kondisi }}</td>
                                        <td> {{ $data->ket }}</td>
                                        {{-- <td> 

                      @if ($data->status == 0)
                      <a href="/barang-masuk/status_masuk/{{$data->id}}" type="button" class="btn btn" style="background-color: #05b3c3; color:#FFFFFF">Push</a>
                      @else
                      @endif

              <a href="/barang-masuk/edit/{{$data->id}}" type="button" class="btn btn" style="background-color: #05b3c3; color:#FFFFFF"><i class="bi bi-pencil delete"></i></a>
              <a href="/barang-masuk/hapus/{{$data->id}}" onclick="return confirm('Hapus Data?')" type="button" class="btn btn-danger"><i class="bi bi-trash delete"></i></a>
                    </td> --}}

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
