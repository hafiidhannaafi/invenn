<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\DataJenisAset;


class DataJenisAsetController extends Controller
{
    public function index()
    {
        //function untuk menampilkan data tabel jenisaset
        $datajenisaset = DataJenisAset::all();
        return view('datajenisaset.index',[
            "title" => "datajenisaset",
            "datajenisaset" => $datajenisaset
        ]);
       
    }
    
    //function untuk insert inputan jenis aset
    public function inputjenisaset(Request $request)
    {
        $simpans = DB::table('jenis_asets')->insert([
            'nama_jenisaset'=>$request->post('nama_jenisaset')
        ]);

        return redirect('/datajenisaset')->with('success', 'Data Berhasil Ditambahkan!');
       
    }

    public function editjenisaset($id)
    {
        $datajenisaset = DataJenisAset::find($id);
        return view('datajenisaset.edit',[
            'datajenisaset' => $datajenisaset,
            'title' => "Edit Jenis Aset"
        ]);
    }

    public function updatejenisaset(Request $request, $id)
    {
        DataJenisAset::find($id)->update($request->all());

        return redirect ('/datajenisaset')->with('success', 'Data Berhasil Diupdate!');
    }

    public function hapusjenisaset($id)
    {
        $datajenisaset= DataJenisAset::find($id);
        $datajenisaset->delete();
        return redirect('/datajenisaset')->with('success', 'Data Berhasil Dihapus!');
    }

}
