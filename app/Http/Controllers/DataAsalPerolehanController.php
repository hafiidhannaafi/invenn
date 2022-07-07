<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataAsalPerolehan;

class DataAsalPerolehanController extends Controller
{
    public function index()
    {
        //function untuk menampilkan data tabel jenisaset
        $dataasalperolehan = DataAsalPerolehan::all();
        return view('dataasalperolehan.index',[
            "title" => "dataasalperolehan",
            "dataasalperolehan" => $dataasalperolehan
        ]);
       
    }
    
    //function untuk insert inputan asal perolehan
    public function inputasalperolehan(Request $request)
    {
        $simpans = DB::table('asal_perolehans')->insert([
            'nama_asalperolehan'=>$request->post('nama_asalperolehan')
        ]);

        return redirect('/dataasalperolehan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    //function untuk edit data asal perolehan
    public function editasalperolehan($id)
    {
        $dataasalperolehan = DataAsalPerolehan::find($id);
        return view('dataasalperolehan.edit',[
            'dataasalperolehan' => $dataasalperolehan,
            'title' => "Edit Asal Perolehan"
        ]);
    }

    //function untuk update data asal perolehan
    public function updateasalperolehan(Request $request, $id)
    {
        DataAsalPerolehan::find($id)->update($request->all());

        return redirect ('/dataasalperolehan')->with('success', 'Data Berhasil Diupdate!');
    }

    //function untuk hapus data asal perolehan
    public function hapusasalperolehan($id)
    {
        $dataasalperolehan= DataAsalPerolehan::find($id);
        $dataasalperolehan->delete();
        return redirect('/dataasalperolehan')->with('success', 'Data Berhasil Dihapus!');
    }

}
