@extends('layouts.master')
@section('content')

@section('title', 'pengajuan')
@section('pengajuan', 'active')
@section('iconss-nav', 'show')

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
                        <center>
                            <h5 class="card-title">Riwayat Peminjaman {{ auth()->user()->name }}</h5>
                            <center>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode </th>
                                            <th scope="col">Nama </th>
                                            <th scope="col">Jenis Peminjaman</th>
                                            <th scope="col">Kegunaan</th>
                                            <th scope="col">Tgl Pengajuan</th>
                                            <th scope="col">Tgl Peminjaman</th>
                                            <th scope="col">Tgl Pengembalian</th>
                                            <th scope="col">Surat</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Status Konfirmasi</th>
                                            <th scope="col">Status Peminjaman</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        ?>
                                        @foreach ($peminjaman as $data)
                                            <tr>
                                                <th>{{ $nomor++ }}</th>
                                                <td> {{ $data->kode_peminjaman }}</td>
                                                <td> {{ $data->nama_peminjam }}</td>
                                                <td> {{ $data->jenis_peminjaman }}</td>
                                                <td>{{ $data->tujuan }}</td>
                                                <td> <?php echo date('d F Y', strtotime($data->tgl_pengajuan)); ?> </td>
                                                <td> <?php echo date('d F Y', strtotime($data->tgl_pinjam)); ?> </td>
                                                <td> <?php echo date('d F Y', strtotime($data->tgl_kembali)); ?></td>
                                                <td>{{ $data->surat_pinjam }}</td>
                                                <td>
                                                    <a href="/detailbarang/{{ $data->kode_peminjaman }}"
                                                        style=" float :right; background-color:   #012970; color:#FFFFFF"
                                                        button type="button" class="btn btn-sm">Detail</a>
                                                </td>
                                                <td>

                                                    <!-- Large Modal -->


                                                    <button type="button" class="btn btn-sm"
                                                        style="background-color:  #012970; color:#FFFFFF"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modaldetail{{ $data->id }}">
                                                        <i class="bi bi-eye"></i>
                                                    </button>

                                                    <div class="modal fade" id="modaldetail{{ $data->id }}"
                                                        tabindex="-1">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Detail Peminjaman</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <!-- Card with an image on left -->


                                                                    <div class="card mb-3">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-4">
                                                                                <img src="{{ asset('fotobarang/' . $data->foto) }}"
                                                                                    class="img-fluid rounded-start"
                                                                                    alt="...">
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="card-body">
                                                                                    {{-- <h5 class="card-title text-center">Detail Data Aset</h5> --}}


                                                                                    <h5 class="card-title text-center">
                                                                                        Detail Peminjaman </h5>

                                                                                    <p class="card-text">
                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-lg-5 col-md-4 label ">
                                                                                            Kode </div>
                                                                                        <div class="col-lg-7 col-md-8">
                                                                                            {{ $data->kode_peminjaman }}
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-lg-5 col-md-4 label">
                                                                                            Nama </div>
                                                                                        <div class="col-lg-7 col-md-8">
                                                                                            {{ $data->nama_peminjam }}
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-lg-5 col-md-4 label">
                                                                                            Jenis Peminjaman</div>
                                                                                        <div class="col-lg-7 col-md-8">
                                                                                            {{ $data->jenis_peminjaman }}
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-lg-5 col-md-4 label">
                                                                                            Kegunaan</div>
                                                                                        <div class="col-lg-7 col-md-8">
                                                                                            {{ $data->tujuan }}
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-lg-5 col-md-4 label">
                                                                                            Tanggal Pengajuan</div>
                                                                                        <div class="col-lg-7 col-md-8">
                                                                                            <?php echo date('d F Y', strtotime($data->tgl_pengajuan)); ?></div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Tanggal awal pinjam</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo date('d F Y', strtotime($data->tgl_pinjam)); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Tanggal pengembalian</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        {{ $data->tgl_kembali }}
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Surat Pengantar</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        {{ $data->surat_pinjam }}
                                                                                    </div>
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

            @php
                $status = App\Models\DetailPeminjaman::where('kode_peminjaman', $data->kode_peminjaman)->first();
            @endphp

            @if ($status->status_konfirmasis_id == 1)
                <td><span class="badge bg-secondary">
                        {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                </td>
            @elseif($status->status_konfirmasis_id == 2)
                <td><span class="badge bg-success">
                        {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                </td>
            @elseif($status->status_konfirmasis_id == 3)
                <td><span class="badge bg-danger">{{ $status->status_konfirmasis->status_konfirmasi }}</span>
                </td>
            @endif

            @if ($status->status_konfirmasis_id == 2)
                @if ($status->status_peminjamans_id == 1)
                    <td><span class="badge bg-secondary">
                            {{ $status->status_peminjamans->status_peminjamans }}</span>
                    </td>
                @elseif($status->status_peminjamans_id == 2)
                    <td><span class="badge bg" style="background-color: #FFA500; color:#FFFFFF">
                            {{ $status->status_peminjamans->status_peminjamans }}</span>
                    </td>
                @elseif($status->status_peminjamans_id == 3)
                    <td><span class="badge bg-info">{{ $status->status_peminjamans->status_peminjamans }}</span>
                    </td>
                @endif
            @endif

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
