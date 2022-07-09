<?php
namespace App\Http\Controllers;

use index;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\JenisBarang;
use App\Models\Barang;
use App\Models\DataJenisAset;
use App\Models\DataAsalPerolehan;
use App\Models\Satuan;


class HomeController extends Controller
{
    

    public function index()
    {
        $dataasalperolehan = DataAsalPerolehan::all();
         $datajenisaset = DataJenisAset::all();
         $jenisbarang = JenisBarang::all();
         $datasatuan = Satuan::all();
         $inputbarang = Barang::all();
        $role=Auth::user()->roles_id;
        
        // return $inputbarang;
        if($role=='1')
        {
            return view('admin',[
             "title" => "perlengkapan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        }

        if($role=='2')
        {
            return view('kepalaunit',[
             "title" => "perlengkapan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        }

        if($role=='3')
        {
            return view('staff',[
             "title" => "perlengkapan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        }
        else
        {
            return view('dashboard',[
             "title" => "perlengkapan",
             "jenisbarang" => $jenisbarang,
             "jenisaset" => $datajenisaset,
             "dataasalperolehan" => $dataasalperolehan,
             "datasatuan" =>$datasatuan,
             "inputbarang"=> $inputbarang
         ]);
        }
    }
}