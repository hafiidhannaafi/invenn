@extends('layouts.master')
@section('content')

@section('title', 'datasatuan')
@section('datasatuan', 'active')
@section('components-nav', 'show')


<main id="main" class="main">

    {{-- <div class="pagetitle">
      <h1>Data Jenis Aset</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav> 
   </div><!-- End Page Title --> --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Satuan</h5>
                    {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}

                    <!-- Basic Modal -->
                    <button type="button" class="btn btn-sm" style="background-color:  #012970; color:#FFFFFF"
                        data-bs-toggle="modal" data-bs-target="#basicModal" data-whatever="@mdo"
                        href="/datajenisaset/tambah">
                        Tambah
                    </button>
                    <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="text-align: center">Input Satuan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- FORM INPUT DATA JENIS ASET -->
                                    <form name="inputsatuan" action="{{ route('inputsatuan') }}" method="POST"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            {{-- <label for="inputNanme4" class="form-label">Nama Jenis Aset</label> --}}
                                            <input type="text" class="form-control" name="nama_satuan"
                                                placeholder="Masukan nama satuan"id="nama_satuan" required>
                                            <div class="invalid-feedback">
                                                Harus di isi
                                            </div>
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
                    </div><!-- End Basic Modal--><br> <br />

                    <!--TAMPIL LIST TABEL DATA JENIS ASET-->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">Nama Satuan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $nomor = 1;
                            ?>
                            @foreach ($datasatuan as $data)
                                <tr>
                                    <th> {{ $nomor++ }} </th>
                                    {{-- <td> {{ $data->id}} </td> --}}
                                    <td>{{ $data->nama_satuan }}</td>
                                    <td>
                                        <!--EDIT DATA JENIS ASET-->
                                        <a href="/datasatuan/edit/{{ $data->id }}" type="button" class="btn btn"
                                            style="background-color: #05b3c3; color:#FFFFFF"><i
                                                class="bi bi-pencil"></i></a>
                                        <a href="/datasatuan/hapussatuan/{{ $data->id }}"
                                            onclick="return confirm('Hapus Data?')" type="button"
                                            class="btn btn-danger"><i class="bi bi-trash"></i></a>

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

                                <form name="hapussatuan" action="/datasatuan/hapussatuan/{{$data->id}}" enctype="multipart/form-data" class="row g-3">
                                  @csrf
                                  @method('get')
                                <div>
                                
                                 Apakah data yakin akan dihapus?
                             
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
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
@endsection
