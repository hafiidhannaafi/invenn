@extends('layouts.master')
@section('content')

@section('title', 'riwayat')
@section('riwayat', 'active')
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
                        <h5 class="card-title">Riwayat Pengajuan Pinjam Barang</h5>

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
                                    <th scope="col">verifikasi</th>
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
                                                style=" float :right; background-color:   #012970; color:#FFFFFF" button
                                                type="button" class="btn btn-sm">Detail</a>
                                        </td>
                                        @php
                                            $status = App\Models\DetailPeminjaman::where('kode_peminjaman', $data->kode_peminjaman)->first();
                                        @endphp
                                        @if ($status->status_konfirmasis_id == 1)
                                            <td><span class="badge bg-secondary">
                                                    {{ $status->status_konfirmasis->status_konfirmasi }}</span></td>
                                        @elseif($status->status_konfirmasis_id == 2)
                                            <td><span class="badge bg-success">
                                                    {{ $status->status_konfirmasis->status_konfirmasi }}</span></td>
                                        @elseif($status->status_konfirmasis_id == 3)
                                            <td><span
                                                    class="badge bg-danger">{{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                            </td>
                                        @endif
                                        <td>
                                            <!--STATUS KONFIRMASI DI SETUJUI -->
                                            <a href="/status_setuju/{{ $data->kode_peminjaman }}" type="button"
                                                class="btn btn-success"><i class="bi bi-check-lg"></i></a></br>
                                            <!--STATUS DI TOLAK-->
                                            <a href="/status_ditolak/{{ $data->kode_peminjaman }}" type="button"
                                                class="btn btn-danger"><i class="bi bi-x"></i></a>
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
