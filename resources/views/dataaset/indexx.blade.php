<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - DataTables</title>
  {{-- <link href="vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
</head>

<body>
    @include('superadmin.navbarsuperadmin')
@include('superadmin.sidebarsuperadmin')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data table</h4>
          <button class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i>Tambah</button>
          <br/>
          <br/>

          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
               <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                     @endphp
                    @foreach ($bidang as $item)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$item->Nama}}</td>

                        {{-- <td>{{$item->nomer_izin}}</td> --}}

                        <td>
                            {{-- <button id="`+data.id+`" class="btn btn-success btn-sm" title="Edit Data">Edit</button>
                            <button id="`+data.id+`" class="btn btn-danger btn-sm hapus_data" title="Hapus Data">Hapus</button> --}}
                            {{-- <a data-id="{{$item->id}}" class="btn btn-outline-info edit"><i class="fa fa-edit"></i></a>
                           --}}
                           <a data-toggle="modal" data-target="#modaledit-{{$item->id}}" class="btn btn-outline-info edit"><i class="fa fa-edit"></i></a>

                            <a href="#" class="btn btn-outline-danger delete" data-id="{{ $item->id}}" data-nama="{{ $item->Nama}}"><i class="fa fa-trash"></i></a>
                            {{-- /hapusakun/{{ $item->id}} --}}

                        </td>

                    </tr>

                    @endforeach


                </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- modal add data-->
<div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
    <form name="frm_add" id="frm_add" class="form-horizontal" action="tambahbidang/proses" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Tambah Data</h4>
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

    </div>
    <div class="modal-body">
        <form name="frm_add" id="frm_add" class="form-horizontal" action="tambahbidang/proses" method="POST" enctype="multipart/form-data">
            @csrf
    {{-- <div class="form-group"><label class="col-lg-2 control-label">Kelas</label>
    <div class="col-lg-10"><input type="text" name="kelas" placeholder="Kelas" class="form-control"></div>
    </div>
    </div> --}}
<div class="form-group"><label class="col-lg-3 control-label">Nama</label>
    <div class="col-lg-10"><input type="text" placeholder="Nama" id="Nama" class="form-control form-control-lg @error('Nama') is-invalid @enderror" name="Nama" value="{{ old('Nama') }}" required autocomplete="Nama" autofocus>
        @error('Nama')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>

{{-- <div class="form-group"><label class="col-lg-3 control-label">No. Izin</label>
    <div class="col-lg-10"><input type="text" placeholder="Nomor Izin" id="nomer_izin" class="form-control form-control-lg @error('nomer_izin') is-invalid @enderror" name="nomer_izin" value="{{ old('nomer_izin') }}" required autocomplete="nomer_izin" autofocus>
        @error('nomer_izin')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div> --}}
</div>

    <div class="modal-footer">
    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </div>
    </form>
    </div>
    </div>

    {{-- Edit Data --}}
        @foreach ($bidang as $item)
    <div class="modal inmodal fade" id="modaledit-{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xs">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

        </div>
        <div class="modal-body">
            <form name="frm_add" id="frm_add" class="form-horizontal" action="{{url('updatebidang/'.$item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

    <div class="form-group"><label class="col-lg-3 control-label">Nama</label>
        <div class="col-lg-10"><input type="text" placeholder="Nama" id="Nama" class="form-control form-control-lg @error('Nama') is-invalid @enderror" name="Nama" value="{{ old('Nama', $item->Nama) }}" required autocomplete="Nama" autofocus>
            @error('Nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>

    {{-- <div class="form-group"><label class="col-lg-3 control-label">No. Izin</label>
        <div class="col-lg-10"><input type="text" placeholder="Nomor Izin" id="nomer_izin" class="form-control form-control-lg @error('nomer_izin') is-invalid @enderror" name="nomer_izin" value="{{ old('nomer_izin', $item->nomer_izin) }}" required autocomplete="nomer_izin" autofocus>
            @error('nomer_izin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div> --}}
    </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
        </div>

        </div>
        </div>
        @endforeach



        {{-- <script>
            $(document).ready(function() {
            //edit data
            $('.edit').on("click",function() {
            var id = $(this).attr('data-id');
            $.ajax({
            url : 'edit/'+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
            $('#id').val(data.id);
            $('#kelas').val(data.kelas);
            $('#modal-edit').modal('show');
            }
            });
            });

            });
            </script> --}}


@include('superadmin.footersuperadmin')
@include('sweetalert::alert')
        </div>

</body>

</html>