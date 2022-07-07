@extends('layouts.master')
@section('content')

@section('title', 'pengajuan')
@section('pengajuan', 'active')
@section('iconss-nav', 'show')

<main id="main" class="main">

    <div class="pagetitle">

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row align-items-top">
            <div class="col-lg-14">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Riwayat Peminjaman</h5>

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
                                                    {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                            </td>
                                        @elseif($status->status_konfirmasis_id == 2)
                                            <td><span class="badge bg-success">
                                                    {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                            </td>
                                        @elseif($status->status_konfirmasis_id == 3)
                                            <td><span
                                                    class="badge bg-danger">{{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                            </td>
                                        @endif

                                        @if ($status->status_konfirmasis_id == 2)
                                            @if ($status->status_peminjamans_id == 1)
                                                <td><span class="badge bg-secondary">
                                                        {{ $status->status_peminjamans->status_peminjamans }}</span>
                                                </td>
                                            @elseif($status->status_peminjamans_id == 2)
                                                <td><span class="badge bg"
                                                        style="background-color: #FFA500; color:#FFFFFF">
                                                        {{ $status->status_peminjamans->status_peminjamans }}</span>
                                                </td>
                                            @elseif($status->status_peminjamans_id == 3)
                                                <td><span
                                                        class="badge bg-info">{{ $status->status_peminjamans->status_peminjamans }}</span>
                                                </td>
                                            @endif
                                        @endif

                                        <td>
                                            <!--STATUS PEMINJAMAN  -->
                                            <a href="/status_barangdiambil/{{ $data->kode_peminjaman }}"
                                                type="button" class="btn btn"
                                                style="background-color: #FFA500; color:#FFFFFF"><i
                                                    class="bi bi-bag-check-fill"></i></a></br>
                                            <!--STATUS PENGEMBALIAN-->
                                            <a href="/status_kembali/{{ $data->kode_peminjaman }}" type="button"
                                                class="btn btn-info"><i class="bi bi-person-check-fill"></i></a>
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
