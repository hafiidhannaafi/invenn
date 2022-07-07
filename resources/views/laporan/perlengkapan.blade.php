@extends('layouts.master')
@section('content')

{{-- @section ('title', 'perlengkapan')
@section ('perlengkapan', 'active')
@section ('forms-nav', 'show') --}}

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
              <h5 class="card-title">Data Aset Perlengkapan</h5>
           
              <!-- Table with stripped rows -->
               <table id="example" class="table-border display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama
                     Tipe/ Spesifik</th>
                    <th scope="col">Jumlah Satuan</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $nomor = 1;  
                  ?>
                  @foreach($inputbarang as $data)
                  @if($data->jenis_asets_id == 4)
                  <tr>
                    <th>  {{ $nomor++ }}</th>
                    <td> {{ $data->kode}}</td>
                    <td> {{ $data->jenis_barangs->jenis_barang}} {{ $data->spesifikasi}}</td>
                    <td> {{ $data->jumlah}} {{ $data->satuans->nama_satuan}}</td>
                    <td> {{ $data->kondisi}}</td>
                    <td> 

                       <!-- Large Modal -->
                       
              <button type="button" class="btn btn-sm" style="background-color:  #012970; color:#FFFFFF" data-bs-toggle="modal" data-bs-target="#modaldetail{{ $data->id}}" >
                <i class="bi bi-eye"></i>
              </button>
             
              <div class="modal fade"  id="modaldetail{{ $data->id}}"  tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Data Aset</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                  <!-- Card with an image on left -->
                 
                 
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('fotobarang/'.$data->foto) }}"  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  {{-- <h5 class="card-title text-center">Detail Data Aset</h5> --}}
                  
                 
                  <h5 class="card-title text-center"> {{ $data->jenis_barangs->jenis_barang}} {{ $data->spesifikasi}}</h5>
                 
                  <p class="card-text">
                  <div class="row">
                      <div class="col-lg-5 col-md-4 label ">Kode </div>
                      <div class="col-lg-7 col-md-8"> {{ $data->kode}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Nama </div>
                      <div class="col-lg-7 col-md-8"> {{ $data->jenis_barangs->jenis_barang}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Tipe</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->spesifikasi}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Jenis aset</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->jenis_asets->nama_jenisaset}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Kegunaan</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->kegunaan}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Tgl Perolehan</div>
                      <div class="col-lg-7 col-md-8">  <?php echo date('d F Y', strtotime ( $data->tanggal_perolehan  ) ); ?></div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Asal Perolehan</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->asal_perolehans->nama_asalperolehan}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Nilai Perolehan</div>
                      <div class="col-lg-7 col-md-8"> Rp. {{ $data->nilai_perolehan}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Legalitas</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->legalitas}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Luas</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->luas}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Beban Penyusutan</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->beban_penyusutan}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Nilai Buku</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->nilai_buku}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Lokasi</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->lokasi}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Penanggung Jawab</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->penanggung_jawab}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Jumlah</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->jumlah}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Satuan</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->satuans->nama_satuan}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Kondisi</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->kondisi}}</div>
                    </div>
  
                    <div class="row">
                      <div class="col-lg-5 col-md-4 label">Ket</div>
                      <div class="col-lg-7 col-md-8"> {{ $data->ket}}</div>
                    </div>
                   
                  </div>
                  </div>

                  
                 
                  </p>
                 
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
  
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->
              
             
                    </td>
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