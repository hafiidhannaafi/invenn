<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\DataJenisAset;
use App\Models\DataAsalPerolehan;
use App\Models\Satuan;
use App\Models\JenisBarang;
use App\Models\Barangkeluar;
use App\Models\BarangKeluar as ModelsBarangKeluar;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        return view('barangkeluar.form',[
            "title" => "barangkeluar",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang
        ]);
       
    }

    public function barangkeluar()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $barangkeluar = barangkeluar::all();
        return view('barangkeluar.index',[
            "title" => "barangkeluar",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "barangkeluar"=> $barangkeluar

        ]);
       
    }

    public function laporanbarangkeluar()
    {   
  
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $barangkeluar = barangkeluar::all();
        return view('laporan.barangkeluar',[
            // "title" => "barangkeluar",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "barangkeluar"=> $barangkeluar

        ]);
       
    }

     public function sortir(Request $request){
    
        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $barangkeluar = Barangkeluar::all()
                    ->whereBetween('tanggal_keluar', [$startDate, $endDate]);
             
                return view('laporan.barangkeluar', compact( 'barangkeluar', 'startDate', 'endDate'));
                break;
        }
    }

    public function databarangkeluar()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $barangkeluar = barangkeluar::all();
        return view('pencatatan.barangkeluar',[
            "title" => "barangkeluar",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang,
            "barangkeluar"=> $barangkeluar

        ]);
       
    }

    public function inputbarangkeluar(Request $request)
    {
        $this->validate($request, [
            'barangs_id' => ['required', 'string', 'max:255'],
            'tanggal_keluar' => ['required', 'string', 'max:255'],
            'jumlah_keluar' => ['required', 'string', 'max:255'],
            'kondisi' => ['required', 'string', 'max:255'],
            'ket' => ['required', 'string', 'max:255'],

        ]);
      
            $barangkeluar = new BarangKeluar();
            $barangkeluar->barangs_id = $request->input('barangs_id');
            $barangkeluar->tanggal_keluar = $request->input('tanggal_keluar');
            $barangkeluar->jumlah_keluar = $request->input('jumlah_keluar');
            $barangkeluar->kondisi = $request->input('kondisi');
            $barangkeluar->ket = $request->input('ket');
            $barangkeluar->save();

    
            return redirect('/barang-keluar')->with('success', 'Data Berhasil Ditambahkan!');
               
        }



        public function hapusbarangkeluar($id)
        {
            $barangkeluar= BarangKeluar::find($id);
            $barangkeluar->delete();
            return redirect('/barang-keluar')->with('success', 'Data Berhasil Dihapus!');
        }

      

        public function editbarangkeluar($id)
        {
            $dataasalperolehan = DataAsalPerolehan::all();
            $datajenisaset = DataJenisAset::all();
            $jenisbarang = JenisBarang::all();
            $datasatuan = Satuan::all();
            $inputbarang = Barang::all();
            $barangkeluar = Barangkeluar::find($id);
            return view('barangkeluar.edit',[
                "title" => "barangkeluar",
                "jenisbarang" => $jenisbarang,
                "jenisaset" => $datajenisaset,
                "dataasalperolehan" => $dataasalperolehan,
                "datasatuan" =>$datasatuan,
                "inputbarang"=> $inputbarang,
                "barangkeluar"=> $barangkeluar

            ]);
        }

        public function updatebarangkeluar(Request $request, $id)
        {
            BarangKeluar::find($id)->update($request->all());

            return redirect ('/barang-keluar')->with('success', 'Data Berhasil Diupdate!');
        }

        public function stok_keluar($id)
        {
            $barangkeluar = Barangkeluar::find($id);
            $barangkeluar->status = 1;
            $barangkeluar->save();
            $databarang= Barang::where('id', $barangkeluar->barangs_id)->first();
            $databarang->jumlah -= (int)$barangkeluar->jumlah_keluar;
            $databarang->save();
            return redirect('/barang-keluar')->with('success', 'Data Berhasil Dikeluarkan!');

        }

}
