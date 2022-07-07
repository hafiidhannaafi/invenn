<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisBarang;
use App\Models\Barang;
use App\Models\DataJenisAset;
use App\Models\DataAsalPerolehan;
use App\Models\Satuan;

class BarangController extends Controller
{

    //MENAMPILKAN DATA MASTER KE FORM
    public function formasettidakbergerak()//aset tidak bergerak
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $dataaset = Barang::all();
        return view('dataaset.form',[
            "title" => "dataaset",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "dataaset"=> $dataaset
        ]);
       
    }

    public function formasetbergerak()//bergerak
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $dataaset = Barang::all();
        return view('dataasetbergerak.form',[
            "title" => "dataasetbergerak",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "dataaset"=> $dataaset
        ]);
       
    }

    public function formperalatan()//peralatan
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $dataaset = Barang::all();
        return view('dataperalatan.form',[
            "title" => "peralatan",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "dataaset"=> $dataaset
        ]);
       
    }

    public function formperlengkapan()//perlengkapan
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $dataaset = Barang::all();
        return view('dataperlengkapan.form',[
            "title" => "perlengkapan",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "dataaset"=> $dataaset
        ]);
       
    }

    //MENAMPILKAN DATA HASIL INPUT ADMIN
    public function dataaset()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        return view('dataaset.index',[
            "title" => "asettidakbergerak",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang
        ]);
       
    }

    public function dataasetbergerak()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        return view('dataasetbergerak.index',[
            "title" => "asetbergerak",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang
        ]);
       
    }

    public function dataasetperalatan()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        return view('dataperalatan.index',[
            "title" => "peralatan",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang
        ]);
       
    }

    public function dataasetperlengkapan()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        return view('dataperlengkapan.index',[
            "title" => "perlengkapan",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            "inputbarang"=> $inputbarang
        ]);
       
    }

     //MENAMPILKAN DATA HASIL INPUT KEPALA UNIT DAN STAFF 

     public function asetbergerak()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('aset.bergerak',[
             "title" => "peralatan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }

     public function laporanasetbergerak()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('laporan.asetbergerak',[
             "title" => "peralatan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }

     public function asettidakbergerak()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('aset.tidakbergerak',[
             "title" => "peralatan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }

      public function laporanasettidakbergerak()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('laporan.asettidakbergerak',[
             "title" => "peralatan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }

     public function asetperalatan()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('aset.peralatan',[
             "title" => "peralatan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }

     public function laporanasetperalatan()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('laporan.peralatan',[
             "title" => "peralatan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }

     public function asetperlengkapan()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('aset.perlengkapan',[
             "title" => "perlengkapan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }

      public function laporanasetperlengkapan()
     {
         $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
         return view('laporan.perlengkapan',[
             "title" => "perlengkapan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        
     }


     //INPUT DATA
    public function create(Request $request)
    {
        $inputbarang = \App\Models\Barang::create($request->all());
        if($request->hasFile('foto'))
        {
             $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
             $inputbarang->foto = $request->file('foto')->getClientOriginalName();
             $inputbarang->save();    
         }
             if ($inputbarang->jenis_asets_id == 2)
               {
                     return redirect('/data-aset')->with('success', 'Data Berhasil Ditambahkan!');
                }
                elseif ($inputbarang->jenis_asets_id == 1)
                {
                    return redirect('/data-asetbergerak')->with('success', 'Data Berhasil Ditambahkan!');
                }
                elseif ($inputbarang->jenis_asets_id == 3)
                {
                    return redirect('/data-peralatan')->with('success', 'Data Berhasil Ditambahkan!');
                }
                elseif ($inputbarang->jenis_asets_id == 4)
                {
                    return redirect('/data-perlengkapan')->with('success', 'Data Berhasil Ditambahkan!');
                }

    }

   
    //EDIT DATA
    public function editdataaset($id)
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang= \App\Models\Barang::find($id);
        return view('dataaset.edit', [
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            'inputbarang' => $inputbarang
        
        ]);
      
    }

    public function editasetbergerak($id)
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang= \App\Models\Barang::find($id);
        return view('dataasetbergerak.edit', [
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            'inputbarang' => $inputbarang
        
        ]);
      
    }

    public function editperalatan($id)
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang= \App\Models\Barang::find($id);
        return view('dataperalatan.edit', [
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            'inputbarang' => $inputbarang
        
        ]);
      
    }

    public function editperlengkapan($id)
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang= \App\Models\Barang::find($id);
        return view('dataperlengkapan.edit', [
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" =>$datasatuan,
            'inputbarang' => $inputbarang
        
        ]);
      
    }


        //UPDATE DATA
    public function update(Request $request, $id)
    {
        
        $inputbarang = \App\Models\Barang::find($id);
        $inputbarang->update($request->all());
        if($request->hasFile('foto'))
        {
             $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
             $inputbarang->foto = $request->file('foto')->getClientOriginalName();
             $inputbarang->save();
            }
             if ($inputbarang->jenis_asets_id == 2)
             {
                   return redirect('/data-aset')->with('success', 'Data Berhasil Diupdate!');
              }
              elseif ($inputbarang->jenis_asets_id == 1)
              {
                  return redirect('/data-asetbergerak')->with('success', 'Data Berhasil Diupdate!');
              }
              elseif ($inputbarang->jenis_asets_id == 3)
              {
                  return redirect('/data-peralatan')->with('success', 'Data Berhasil Diupdate!');
              }
              elseif ($inputbarang->jenis_asets_id == 4)
              {
                  return redirect('/data-perlengkapan')->with('success', 'Data Berhasil Diupdate!');
              }

  
            
  
    }

    //HAPUS DATA
    public function hapusdataaset($id)
    {
        $inputbarang=  Barang::find($id);
        $inputbarang->delete();
        return redirect('/data-aset')->with('success', 'Data Berhasil Dihapus!');
    }

    public function hapusasetbergerak($id)
    {
        $inputbarang=  Barang::find($id);
        $inputbarang->delete();
        return redirect('/data-asetbergerak')->with('success', 'Data Berhasil Dihapus!');
    }

    public function hapusperalatan($id)
    {
        $inputbarang=  Barang::find($id);
        $inputbarang->delete();
        return redirect('/data-peralatan')->with('success', 'Data Berhasil Dihapus!');
    }

    public function hapusperlengkapan($id)
    {
        $inputbarang=  Barang::find($id);
        $inputbarang->delete();
        return redirect('/data-perlengkapan')->with('success', 'Data Berhasil Dihapus!');
    }
}

//KODE
    $data = Barang::max('kode');
            $huruf = "LPTP";
            $urutan = (int)substr($data, 3, 3);
            $urutan++;
            $barang_id = $huruf . sprintf("%04s", $urutan);