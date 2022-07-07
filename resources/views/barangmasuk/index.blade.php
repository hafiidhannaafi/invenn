@extends('layouts.master')
@section('content')

@section ('title', 'barangmasuk')
@section ('barangmasuk', 'active')
@section ('charts-nav', 'show')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" />

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

              <a href="/barang-masuk/form" type="button"  class="btn btn-sm" style="background-color:  #012970; color:#FFFFFF">Tambah</a>
           
              <!-- Table with stripped rows -->
              <table id="example" class="table-border display nowrap" style="width:100%">
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
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $nomor = 1;  
                  ?>
                  @foreach($barangmasuk as $data)
                  <tr>
                    <th>{{ $nomor++ }}</th>
                    <td> {{ $data->barangs->kode}} - {{ $data->barangs->jenis_barangs->jenis_barang}}  {{ $data->barangs->spesifikasi}} </td>
                    <td>  <?php echo date('d F Y', strtotime ( $data->tanggal_masuk  ) ); ?></td>
                    <td> {{ $data->jumlah_masuk}}</td>
                    <td> {{ $data->supplier}}</td>
                    <td> {{ $data->kondisi}}</td>
                    <td> {{ $data->ket}}</td>
                    <td> 

                      @if($data->status == 0)
                      <a href="/barang-masuk/status_masuk/{{$data->id}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-check-lg"></i></a>
                      @else
                      @endif

              <a href="/barang-masuk/edit/{{$data->id}}" type="button" class="btn btn-sm" style="background-color: #05b3c3; color:#FFFFFF"><i class="bi bi-pencil delete"></i></a>
              <a href="/barang-masuk/hapus/{{$data->id}}" onclick="return confirm('Hapus Data?')" type="button" class="btn btn-danger  btn-sm"><i class="bi bi-trash delete"></i></a>
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


      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script> 

    </section>
@endsection