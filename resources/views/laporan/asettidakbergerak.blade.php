@extends('layouts.master')
@section('content')

{{-- @section ('title', 'barangkeluar')
@section ('barangkeluar', 'active')
@section ('charts-nav', 'show') --}}

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
       

             
          
              <h5 class="card-title">Laporan Aset Tidak Bergerak</h5>
           
              <!-- Table with stripped rows -->
              <table id="example" class="table-border display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama
                     Tipe/ Spesifik</th>
                    <th scope="col">Kegunaan</th>
                    <th scope="col">Tgl Perolehan</th>
                     <th scope="col">Asal & Nilai Perolehan</th>
                     <th scope="col">Legalitas & Luas</th>
                    <th scope="col">Lokasi</th>
                     <th scope="col">Jumlah</th>
                    {{-- <th scope="col">Penangung Jawab</th> --}}
                    {{-- <th scope="col">Jumlah Satuan</th> --}}
                    {{-- <th scope="col">Kondisi</th>
                    <th scope="col">Ket</th> --}}

                  </tr>
                </thead>

              
                <tbody>
                  <?php
                  $nomor = 1;  
                  ?>
                  @foreach($inputbarang as $data)
                  @if($data->jenis_asets_id == 2)
                  <tr>
                    <th>  {{ $nomor++ }}</th>
                    <td> {{ $data->kode}}</td>
                    <td> {{ $data->jenis_barangs->jenis_barang}} {{ $data->spesifikasi}}</td>
                    <td> {{ $data->kegunaan}} </td>
                    <td> {{ $data->tanggal_perolehan}} 
                    <td> {{ $data->asal_perolehans->nama_asalperolehan}} {{ $data->nilai_perolehan}}</td>
                    <td> {{ $data->legalitas}} {{ $data->luas}}</td>
                    <td> {{ $data->lokasi}}</td>
                     {{-- <td> {{ $data->penanggung_jawab}}</td> --}}
                    <td> {{ $data->jumlah}} {{ $data->satuans->nama_satuan}}</td>
                    {{-- <td> {{ $data->kondisi}}</td> --}}
                    {{-- <td> {{ $data->ket}}</td>
                    <td>  --}}

                    @endif
                    @endforeach
                 
                  </tr>
                 
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