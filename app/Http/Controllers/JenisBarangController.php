<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    public function index()
    {
        //function untuk menampilkan data tabel satuan
        $jenisbarang = JenisBarang::all();
        return view('jenisbarang.index',[
            "title" => "jenisbarang",
            "jenisbarang" => $jenisbarang
        ]);
       
    }
    
    //function untuk insert inputan satuan
    public function inputjenisbarang(Request $request)
    {
        $simpans = DB::table('jenis_barangs')->insert([
            'jenis_barang'=>$request->post('jenis_barang')
        ]);

        return redirect('/jenisbarang')->with('success', 'Data Berhasil Ditambahkan!');
       
    }

    public function editjenisbarang($id)
    {
        $jenisbarang = JenisBarang::find($id);
        return view('jenisbarang.edit',[
            'jenisbarang' => $jenisbarang,
            'title' => "Edit jenisbarang"
        ]);
    }

    public function updatejenisbarang(Request $request, $id)
    {
        JenisBarang::find($id)->update($request->all());

        return redirect ('/jenisbarang')->with('success', 'Data Berhasil Diupdate!');
    }

    public function hapusjenisbarang($id)
    {
        $jenisbarang=  JenisBarang::find($id);
        $jenisbarang->delete();
        return redirect('/jenisbarang')->with('success', 'Data Berhasil Dihapus!');
    }

}