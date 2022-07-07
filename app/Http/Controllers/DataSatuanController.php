<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Satuan;
use Illuminate\Http\Request;

class DataSatuanController extends Controller
{
    public function index()
    {
        //function untuk menampilkan data tabel satuan
        $datasatuan = Satuan::all();
        return view('datasatuan.index',[
            "title" => "datasatuan",
            "datasatuan" => $datasatuan
        ]);
       
    }
    
    //function untuk insert inputan satuan
    public function inputsatuan(Request $request)
    {
        $simpans = DB::table('satuans')->insert([
            'nama_satuan'=>$request->post('nama_satuan')
        ]);

        return redirect('/datasatuan')->with('success', 'Data Berhasil Ditambahkan!');
       
    }

    public function editsatuan($id)
    {
        $datasatuan = Satuan::find($id);
        return view('datasatuan.edit',[
            'datasatuan' => $datasatuan,
            'title' => "Edit Satuan"
        ]);
    }

    public function updatesatuan(Request $request, $id)
    {
        Satuan::find($id)->update($request->all());

        return redirect ('/datasatuan')->with('success', 'Data Berhasil Diupdate!');
    }

    public function hapussatuan($id)
    {
        $datasatuan=  \App\Models\Satuan::find($id);
        $datasatuan->delete();
        return redirect('/datasatuan')->with('success', 'Data Berhasil Dihapus!');
    }


}
