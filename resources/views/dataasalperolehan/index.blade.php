@extends('layouts.master')
@section('content')

@section('title', 'asalperolehan')
@section('asalperolehan', 'active')
@section('components-nav', 'show')

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
                        <h5 class="card-title">Data Asal Perolehan</h5>
                        {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}

                        <!-- START MODAL INPUT ASAL PEROLEHAN ASET -->
                        <button type="button" class="btn btn" style="background-color:  #012970; color:#FFFFFF"
                            data-bs-toggle="modal" data-bs-target="#basicModal">
                            Tambah
                        </button>
                        <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Asal Perolehan Aset </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <!-- FORM INPUT DATA ASAL PEROLEHAN ASET -->
                                        <form name="inputasalperolehan" action="{{ route('inputasalperolehan') }}"
                                            method="POST" enctype="multipart/form-data" class="row g-3">
                                            @csrf
                                            <div class="col-12">
                                                {{-- <label for="inputNanme4" class="form-label">Nama Asal Perolehan </label> --}}
                                                <input type="text" name="nama_asalperolehan" class="form-control"
                                                    id="inputNanme4" placeholder="Masukan Asal perolehan" required>
                                            </div>

                                    </div>
                                    <div class="modal-footer" class="text-center">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn"
                                            style="background-color: #012970; color:#FFFFFF">Save</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END MODAL INPUT ASAL PEROLEHAN ASET --><br> <br />

                        <!--TAMPIL LIST TABEL DATA ASAL PEROLEHAN ASET-->
                        <table id="datatable" class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jenis Aset</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                @foreach ($dataasalperolehan as $data)
                                    <tr>
                                        <th>{{ $nomor++ }}</th>
                                        <td>{{ $data->nama_asalperolehan }}</td>
                                        <td>
                                            <!--EDIT DATA ASAL PEROLEHAN ASET-->
                                            <a href="/dataasalperolehan/edit/{{ $data->id }}" type="button"
                                                class="btn btn" style="background-color: #05b3c3; color:#FFFFFF"><i
                                                    class="bi bi-pencil delete"></i></a>
                                            <a href="/dataasalperolehan/hapusasalperolehan/{{ $data->id }}"
                                                onclick="return confirm('Hapus Data?')" type="button"
                                                class="btn btn-danger"><i class="bi bi-trash delete"></i></a>

                                            {{-- <!--HAPUS DATA JENIS ASET PAKAI MODAL UNTUK KONFIRMASI HAPUS-->
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-trash delete"></i></button>
                      <div class="modal fade" id="smallModal" tabindex="-1">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Konfirmasi Hapus</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                              <form name="hapusasalperolehan" method="post" action="/dataasalperolehan/hapusasalperolehan/{{$data->id}}" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                @method('delete')
                              <div>
                                @foreach ($dataasalperolehan as $data)
                              Apakah data <strong> </strong> yakin akan dihapus?
                              @endforeach
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <button type="Submit" class="btn btn-danger">Hapus</button>
                            </form>
                            
                            </div>
                          </div>
                        </div>
                      </div><!-- End Modal--> --}}

                                        </td>
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
