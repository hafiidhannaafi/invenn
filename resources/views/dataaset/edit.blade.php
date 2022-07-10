@extends('layouts.master')
@section('content')

@section('title', 'asettidakbergerak')
@section('asettidakbergerak', 'active')
@section('forms-nav', 'show')

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
                        <h5 class="card-title">Formulir Edit Data Aset Tidak Bergerak</h5>

                        <!-- validation Form Elements -->

                        <form action="/data-aset/update/{{ $inputbarang->id }}" method="POST"
                            enctype="multipart/form-data" needs-validation" novalidate>
                            @csrf
                            <div class="row mb-3">
                                <label for="validationCustom01" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $inputbarang->kode }}" id=" "
                                        name="kode" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="jenis_barangs_id" id=" "
                                        aria-label="Default select example">
                                        {{-- <option selected>Pilih Nama Barang</option> --}}

                                        <?php
                                        foreach ($jenisbarang as $data) {
                                            echo "<option value='$data->id'";
                                            echo $inputbarang['jenis_barangs_id'] == $data->id ? 'selected' : '';
                                            echo ">$data->jenis_barang </option>";
                                        }
                                        ?>


                                    </select>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip02"
                                    class="col-sm-2 col-form-label">Tipe/Spesifikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $inputbarang->spesifikasi }}" name="spesifikasi"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip03" class="col-sm-2 col-form-label">File Gambar</label>
                                <div class="col-sm-10">

                                    <object data="{{ asset('filebarang/' . $inputbarang->foto) }}"></object>
                                    <input type="file" value="{{ asset('filebarang/' . $inputbarang->foto) }}"
                                        name="foto" class="form-control"required>


                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Jenis Aset</label>
                                <div class="col-sm-10">

                                    <select class="form-select" name="jenis_asets_id" id=" "
                                        aria-label="Default select example">
                                        {{-- <option selected>Silakan Pilih Jenis Aset</option> --}}

                                        <?php
                                        foreach ($jenisaset as $data) {
                                            echo "<option value='$data->id'";
                                            echo $inputbarang['jenis_asets_id'] == $data->id ? 'selected' : '';
                                            echo ">$data->nama_jenisaset</option>";
                                        }
                                        ?>


                                    </select>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip04" class="col-sm-2 col-form-label">Kegunaan</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $inputbarang->kegunaan }}" name="kegunaan"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip05" class="col-sm-2 col-form-label">Tanggal
                                    Perolehan</label>
                                <div class="col-sm-10">
                                    <input type="date" value="{{ $inputbarang->tanggal_perolehan }}"
                                        name="tanggal_perolehan" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Asal Perolehan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="asal_perolehans_id" id=" "
                                        aria-label="Default select example">
                                        {{-- <option selected>Silakan Pilih Asal Perolehan</option> --}}


                                        <?php
                                        foreach ($dataasalperolehan as $data) {
                                            echo "<option value='$data->id'";
                                            echo $inputbarang['asal_perolehans_id'] == $data->id ? 'selected' : '';
                                            echo ">$data->nama_asalperolehan</option>";
                                        }
                                        ?>


                                    </select>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip04" class="col-sm-2 col-form-label">Nilai Perolehan/Harga
                                </label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" value="{{ $inputbarang->nilai_perolehan }}"
                                            id=" " name="nilai_perolehan" class="form-control"
                                            placeholder="Username" aria-label="Username"
                                            aria-describedby="basic-addon1" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Legalitas</label>
                                    <div class="col-sm-10">
                                        <input type="text" value=" {{ $inputbarang->legalitas }}" id=" "
                                            name="legalitas" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Luas</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $inputbarang->luas }}" id=" "
                                            name="luas" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                  <label for="validationTooltip04" class="col-sm-2 col-form-label">Beban Penyusutan</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$inputbarang->beban_penyusutan}}" id=" "  name="beban_penyusutan" class="form-control"  required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="validationTooltip04" class="col-sm-2 col-form-label">Nilai Buku</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$inputbarang->nilai_buku}}" id=" "  name="nilai_buku" class="form-control"  required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div> --}}


                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $inputbarang->lokasi }}" id=" "
                                            name="lokasi" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Penanggung
                                        Jawab</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $inputbarang->penanggung_jawab }}"
                                            id=" " name="penanggung_jawab" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $inputbarang->jumlah }}" id=" "
                                            name="jumlah" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip06" class="col-sm-2 col-form-label">Satuan</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id=" " name="satuans_id"
                                            aria-label="Default select example">
                                            {{-- <option selected>Silakan Pilih Satuan</option> --}}


                                            <?php
                                            foreach ($datasatuan as $data) {
                                                echo "<option value='$data->id'";
                                                echo $inputbarang['satuans_id'] == $data->id ? 'selected' : '';
                                                echo ">$data->nama_satuan</option>";
                                            }
                                            ?>


                                        </select>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip06" class="col-sm-2 col-form-label">Kondisi</label>
                                    <div class="col-sm-10">

                                        <select class="form-select" id="validationTooltip06" name="kondisi"
                                            aria-label="Default select example">
                                            {{-- <option selected>Kondisi Barang</option> --}}
                                            <option value="Baik"
                                                {{ $inputbarang->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                                            <option value="Cukup"
                                                {{ $inputbarang->kondisi == 'Cukup' ? 'selected' : '' }}>Cukup
                                            </option>
                                            <option value="Tidak Baik"
                                                {{ $inputbarang->kondisi == 'Tidak Baik' ? 'selected' : '' }}>Tidak
                                                Baik
                                            </option>
                                        </select>



                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04"
                                        class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $inputbarang->ket }}" id=" "
                                            name="ket" class="form-control"required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button style=" float :right; background-color:   #012970; color:#FFFFFF"
                                            type="submit" class="btn btn">Submit</button>
                                    </div>
                                </div>
                        </form><!-- End General Form Elements -->



                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
