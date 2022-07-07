<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\DataJenisAset;
use App\Models\DataAsalPerolehan;
use App\Models\Satuan;
use App\Models\JenisBarang;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function index()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        return view('barangmasuk.form',[
            "title" => "barangmasuk",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang
        ]);
       
    }

    public function barangmasuk()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $barangmasuk= BarangMasuk::all();
        return view('barangmasuk.index',[
            "title" => "barangmasuk",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "barangmasuk"=> $barangmasuk
        ]);
       
    }

    public function laporanbarangmasuk()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $barangmasuk= BarangMasuk::all();
        return view('laporan.barangmasuk',[
            "title" => "laporan barangmasuk",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "barangmasuk"=> $barangmasuk
        ]);
       
    }

    public function databarangmasuk()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $barangmasuk= BarangMasuk::all();
        return view('pencatatan.barangmasuk',[
            "title" => "barangmasuk",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "barangmasuk"=> $barangmasuk
        ]);
       
    }

    public function inputstokmasuk(Request $request)
    {
        $this->validate($request, [
            'barangs_id' => ['required', 'string', 'max:255'],
            'tanggal_masuk' => ['required', 'string', 'max:255'],
            'jumlah_masuk' => ['required', 'string', 'max:255'],
            'supplier' => ['required', 'string', 'max:255'],
            'kondisi' => ['required', 'string', 'max:255'],
            'ket' => ['required', 'string', 'max:255'],

        ]);
      
            $barangmasuk = new BarangMasuk();
            $barangmasuk ->barangs_id = $request->input('barangs_id');
            $barangmasuk ->tanggal_masuk = $request->input('tanggal_masuk');
            $barangmasuk ->jumlah_masuk = $request->input('jumlah_masuk');
            $barangmasuk ->supplier = $request->input('supplier');
            $barangmasuk ->kondisi = $request->input('kondisi');
            $barangmasuk ->ket = $request->input('ket');

            $barangmasuk->save();
            return redirect('/barang-masuk')->with('success', 'Data Berhasil Ditambahkan!');
               
        }

        
        public function editbarangmasuk($id)
        {
            $dataasalperolehan = DataAsalPerolehan::all();
            $datajenisaset = DataJenisAset::all();
            $jenisbarang = JenisBarang::all();
            $datasatuan = Satuan::all();
            $inputbarang = Barang::all();
            $barangmasuk = barangmasuk::find($id);
            return view('barangmasuk.edit',[
                "title" => "barangmasuk",
                "jenisbarang" => $jenisbarang,
                "jenisaset" => $datajenisaset,
                "dataasalperolehan" => $dataasalperolehan,
                "datasatuan" =>$datasatuan,
                "inputbarang"=> $inputbarang,
                "barangmasuk"=> $barangmasuk

            ]);
        }

        public function updatebarangmasuk(Request $request, $id)
        {
            BarangMasuk::find($id)->update($request->all());

            return redirect ('/barang-masuk')->with('success', 'Data Berhasil Diupdate!');
        }


        public function hapusbarangmasuk($id)
        {
            $barangmasuk= BarangMasuk::find($id);
            $barangmasuk->delete();
            return redirect('/barang-masuk')->with('success', 'Data Berhasil Dihapus!');
        }

        public function stok_masuk($id)
        {
            $barangmasuk = BarangMasuk::find($id);
            $barangmasuk->status = 1;
            $barangmasuk->save();
            $databarang= Barang::where('id', $barangmasuk->barangs_id)->first();
            $databarang->jumlah += (int)$barangmasuk->jumlah_masuk;
            $databarang->save();
            return redirect('/barang-masuk')->with('success', 'Data Berhasil Dimasukkan!');

        }
}
