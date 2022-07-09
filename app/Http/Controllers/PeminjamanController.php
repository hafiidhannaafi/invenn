<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisBarang;
use App\Models\Barang;
use App\Models\DataJenisAset;
use App\Models\DataAsalPerolehan;
use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use App\Models\StatusPeminjaman;
use App\Models\StatusKonfirmasi;
use App\Models\Satuan;
use App\Models\User;

class PeminjamanController extends Controller
{
    //MENAMPILKAN DATA MASTER KE FORM
    public function index()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();

        // $akun = request()->user();
        // $a = User::where('users_id' , $akun->id)->get();
        // $akun = User::all();

        return view('peminjaman.form',[
            "title" => "riwayat",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            // "akun"=> $akun,
            // "a"=>$a
        ]);
       
    }

    //MENAMPILKAN DATA MASTER KE FORM
    public function peminjaman()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
       $peminjaman = Peminjaman::latest()->get();
        $akun = User::all();
        return view('peminjaman.riwayat',[
            "title" => "riwayat",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "peminjaman"=> $peminjaman,
            "akun" => $akun
        ]);
       
    }

    //MENAMPILKAN DATA MASTER KE FORM
    public function pengajuan()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $kode_peminjaman = request()->user();
         $status = DetailPeminjaman::where('kode_peminjaman' , $kode_peminjaman)->get();
        // $akun = User::all();

        $akun = request()->user();
        $peminjaman = Peminjaman::where('users_id' , $akun->id)->latest()->get();
      

        return view('peminjaman.pengajuan',[
            "title" => "pengajuan",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "peminjaman"=> $peminjaman,
            "akun"=> $akun,
            "status" => $status
        ]);
       
    }

    //MENAMPILKAN DATA MASTER KE FORM
    public function riwayat()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $akun = User::all();
        $peminjaman = Peminjaman::latest()->get();
        return view('peminjaman.peminjaman',[
            "title" => "pengajuan",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "peminjaman"=> $peminjaman,
            "akun"=> $akun
        ]);
       
    }
    
        public function detail_barang($id)
    {
        $data = DetailPeminjaman::where('kode_peminjaman', $id)->get();
        //    $peminjaman = Peminjaman::all();
        return view('peminjaman.data_peminjaman',[
            "title" => "pengajuan",
            "data" => $data,
            // "peminjaman" => $peminjaman,
        ]);
       
    }


    // INPUT PEMINJAMAN
    // public function create(Request $request)
    // {

    //     $peminjaman = \App\Models\Peminjaman::create($request->all());
    //     if($request->hasFile('surat_pinjam'))
    //     {
    //          $request->file('surat_pinjam')->move('surat/', $request->file('surat_pinjam')->getClientOriginalName());
    //          $peminjaman->surat_pinjam = $request->file('surat_pinjam')->getClientOriginalName();
    //          $peminjaman->save();    
    //      }
    //      return redirect('/peminjaman/form')->with('success', 'Data Berhasil Ditambahkan!');
            

    // }

    
    // public function create(Request $request)
    // {
    //     $barangs=array();
    //     $jumlahs=array();

    //     foreach($request->$barangs as $i)
    //     {
    //         array_push($barangs,$i);
    //     }
     
    //     foreach($request->$jumlahs as $i)
    //     {
    //         array_push($jumlahs,$i);
    //     }
       
    //     for($i=0; $i<sizeof($barangs); $i++)
    //     $this->validate($request, [
            // 'barangs_id' => ['required', 'string', 'max:255'],
            // 'status_konfirmasis_id' => ['required', 'string', 'max:255'],
            // 'status_peminjamans_id' => ['required', 'string', 'max:255'],
            // 'users_id' => ['required', 'string', 'max:255'],
            // 'nama_peminjam' => ['required', 'string', 'max:255'],
            // 'jenis_peminjaman' => ['required', 'string', 'max:255'],
            // 'tujuan' => ['required', 'string', 'max:255'],
            // 'jumlah_pinjam' => ['required', 'string', 'max:255'],
            // 'tgl_pengajuan' => ['required', 'string', 'max:255'],
            // 'tgl_pinjam' => ['required', 'string', 'max:255'],
            // 'tgl_kembali' => ['required', 'string', 'max:255'],
            // 'surat_pinjam' => ['required', 'string', 'max:255']

    //     ]);
      
    //         $peminjaman = new Peminjaman();
    //         $peminjaman ->barangs[$i] = $request->input('barangs_id');
    //         $peminjaman ->status_konfirmasis_id = $request->input('status_konfirmasis_id');
    //         $peminjaman ->status_peminjamans_id = $request->input('status_peminjamans_id');
            // $peminjaman ->users_id = $request->input('users_id');
            // $peminjaman ->nama_peminjam = $request->input('nama_peminjam');
            // $peminjaman ->jenis_peminjaman = $request->input('jenis_peminjaman');
            // $peminjaman ->tujuan = $request->input('tujuan');
            // $peminjaman ->jumlahs[$i] = $request->input('jumlah_pinjam');
            // $peminjaman ->tgl_pengajuan= $request->input('tgl_pengajuan');
            // $peminjaman ->tgl_pinjam = $request->input('tgl_pinjam');
            // $peminjaman ->tgl_kembali = $request->input('tgl_kembali');
            // $peminjaman ->surat_pinjam = $request->input('surat_pinjam');

            // if($request->hasFile('surat_pinjam'))
            // {
            //      $request->file('surat_pinjam')->move('surat/', $request->file('surat_pinjam')->getClientOriginalName());
            //      $peminjaman->surat_pinjam = $request->file('surat_pinjam')->getClientOriginalName();
            //      $peminjaman->save();    
            //  }

    //          return redirect('/peminjaman/form')->with('success', 'Data Berhasil Ditambahkan!');
               
    //     }

    public function create(Request $request)
    {  
        // dd($request);
            $data = Peminjaman::max('kode_peminjaman');
            $huruf = "PB";
            $urutan = (int)substr($data, 3, 3);
            $urutan++;
            $book_id = $huruf . sprintf("%04s", $urutan);

        $barangs_id=array();
        $jumlah_pinjam=array();

        foreach($request->barangs_id as $i)
        {
            array_push($barangs_id,$i);
        }
     
        foreach($request->jumlah_pinjam as $k)
        {
            array_push($jumlah_pinjam,$k);
        }
            

    //    $jml = $request->jml_barang;
       $jml = count($jumlah_pinjam);
       
        // for($i=0; $i< $jml; $i++)
        // {
        //     $dtpeminjaman =new DetailPeminjaman();
        //     $dtpeminjaman->kode_peminjaman = $book_id;
        //     $dtpeminjaman->status_konfirmasis_id = $request->status_konfirmasis_id;
        //     $dtpeminjaman->status_peminjamans_id = $request->status_peminjamans_id;
        //     $dtpeminjaman->barangs_id = $barangs_id[$i];
        //     $dtpeminjaman ->jumlah_pinjam = $jumlah_pinjam[$i];
        //     $dtpeminjaman->save();
        // }
for($i=0; $i< $jml; $i++)
        { $b = Barang::where('id',$barangs_id[$i])->first();
            if($b->jumlah < $jumlah_pinjam[$i]){
                        return redirect()->back()->with('warning', 'maaf jumlah barang yang anda pinjam melebihi stok');

            }else{
            $dtpeminjaman =new DetailPeminjaman();
            $dtpeminjaman->kode_peminjaman = $book_id;
            $dtpeminjaman->status_konfirmasis_id = $request->status_konfirmasis_id;
            $dtpeminjaman->status_peminjamans_id = $request->status_peminjamans_id;
            $dtpeminjaman->barangs_id = $barangs_id[$i];
            $dtpeminjaman ->jumlah_pinjam = $jumlah_pinjam[$i];
            $dtpeminjaman->save();}
        }
        $peminjaman =new Peminjaman();
            $peminjaman->kode_peminjaman = $book_id;
            $peminjaman ->users_id = $request->users_id;
            $peminjaman ->nama_peminjam = $request->nama_peminjam;
            $peminjaman ->jenis_peminjaman = $request->jenis_peminjaman;
            $peminjaman ->tujuan = $request->tujuan;
            $peminjaman ->tgl_pengajuan= $request->tgl_pengajuan;
            $peminjaman ->tgl_pinjam = $request->tgl_pinjam;
            $peminjaman ->tgl_kembali = $request->tgl_kembali;
            $peminjaman ->surat_pinjam = $request->surat_pinjam;
            if($request->hasFile('surat_pinjam'))
            {
                 $request->file('surat_pinjam')->move('surat/', $request->file('surat_pinjam')->getClientOriginalName());
                 $peminjaman->surat_pinjam = $request->file('surat_pinjam')->getClientOriginalName();
                 $peminjaman->save();    
             }
        return redirect('/peminjaman/form')->with('success', 'Data Berhasil Ditambahkan!');
    }

     public function download(Request $request, $surat_pinjam)
    {
        
return response()->download(public_path('surat/'. $surat_pinjam));

       
    }



    // public function status_setuju($id)
    // {
    //     $datapinjam = Peminjaman::find($id);
    //     $datapinjam->status_konfirmasis_id = 2;
    //     $datapinjam->save();
    //     $databarang= Barang::where('id', $datapinjam->barangs_id)->first();
    //     $databarang->jumlah -= (int)$datapinjam->jumlah_pinjam;
    //     $databarang->save();
    //     return redirect('/peminjaman/riwayat')->with('success', 'Disetujui');
    // }

  
    public function status_ditolak($kode_peminjaman)
    {
        $datadetail = DetailPeminjaman::where('kode_peminjaman', $kode_peminjaman)->get();
        foreach($datadetail as $d){
            $d->status_konfirmasis_id = 3;
            $d->save();


        }
        return redirect()->back()->with('warning', 'Peminjaman di tolak');
    }

     public function status_setuju($kode_peminjaman)
    {
        $datadetail = DetailPeminjaman::where('kode_peminjaman', $kode_peminjaman)->get();
        foreach($datadetail as $d){
            $d->status_konfirmasis_id = 2;
            $d->save();


        }
        return redirect()->back()->with('success', 'Peminjaman disetujui');
    }

        public function status_barangdiambil($kode_peminjaman)
    {
        // $datadetail = DetailPeminjaman::where('kode_peminjaman', $kode_peminjaman)->get();
        foreach(DetailPeminjaman::where('kode_peminjaman', $kode_peminjaman)->get() as $d){
            $d->status_peminjamans_id = 2;
            $d->save();

        foreach(Barang::where('id', $d->barangs_id)->get() as $b) //perulngan dimana id barang = barangs_id yg ada di detail peminjaman
        {
            $b->jumlah -= (int)$d->jumlah_pinjam;
            $b->save();

        }
        }
        return redirect()->back()->with('success', 'barang telah dipinjam');



    }

     public function status_kembali($kode_peminjaman)
    {
        // $datadetail = DetailPeminjaman::where('kode_peminjaman', $kode_peminjaman)->get();
        foreach(DetailPeminjaman::where('kode_peminjaman', $kode_peminjaman)->get() as $d){
            $d->status_peminjamans_id = 3;
            $d->save();

        foreach(Barang::where('id', $d->barangs_id)->get() as $b) //perulngan dimana id barang = barangs_id yg ada di detail peminjaman
        {
            $b->jumlah += (int)$d->jumlah_pinjam;
            $b->save();

        }
        }
        return redirect()->back()->with('success', 'peminjaman selesai');



    }


}