<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class UserController extends Controller
{
    //DATA USER/PEMINJAM
    public function index()
    {
        $akun = User::all();
        return view('datauser.index',[
            'title' => "datauser",
            'akun' => $akun
        ]);
       
    }

    //DATA ADMIN
    public function dataadmin()
    {   
        $akun = User::all();
        return view('dataadmin.index',[
            'title' => "dataadmin",
            'akun' => $akun
        ]); 
    }

     //DATA KEPALA
    public function datakepala()
    {
      
        $akun = User::all();
        return view('datakepala.index',[
            'title' => "datakepala",
            'akun' => $akun
        ]);
       
    }


    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'roles_id' => ['required', 'string', 'max:255'],
    //         'alamat' => ['required', 'string', 'max:255'],
    //         'posisi' => ['required', 'string', 'max:255'],
    //         'telephone' => ['required', 'string', 'max:255'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'roles_id' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'posisi' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
      
            $akun = new user;
            $akun->name = $request->input('name');
            $akun->email = $request->input('email');
            $akun->roles_id = $request->input('roles_id');
            $akun->alamat = $request->input('alamat');
            $akun->posisi = $request->input('posisi');
            $akun->telephone = $request->input('telephone');
            $akun->password = Hash::make($request->password);

            $akun->save();
            if ($akun->roles_id == 1){
                return redirect()->route('data-admin')->with('success', 'Data Berhasil Ditambahkan!');
                }elseif ($akun->roles_id == 2){
                    return redirect()->route('data-kepala')->with('success', 'Data Berhasil Ditambahkan!');
                }elseif ($akun->roles_id == 3){
                    return redirect()->route('datauser')->with('success', 'Data Berhasil Ditambahkan!');
                }
        }

            public function edituser($id)
            {
                $akun = User::find($id);
                return view('datauser.edit',[
                    'akun' => $akun,
                    'title' => "Edit akun user"
                ]);
            }

            public function editadmin($id)
            {
                $akun = User::find($id);
                return view('dataadmin.edit',[
                    'akun' => $akun,
                    // 'user'=>$user,
                    'title' => "Edit akun admin"
                ]);
            }

            public function editkepala($id)
            {
                $akun = User::find($id);
                return view('datakepala.edit',[
                    'akun' => $akun,
                    // 'user'=>$user,
                    'title' => "Edit akun kepala"
                ]);
            }

            public function updateadmin(Request $request, $id)
            {
                User::find($id)->update($request->all());
    
                return redirect ('/data-admin')->with('success', 'Data Berhasil Diupdate!');
            }

            public function updateuser(Request $request, $id)
            {
                User::find($id)->update($request->all());
    
                return redirect ('/data-user')->with('success', 'Data Berhasil Diupdate!');
            }

            public function updatekepala(Request $request, $id)
            {
                User::find($id)->update($request->all());
    
                return redirect ('/data-kepala')->with('success', 'Data Berhasil Diupdate!');
            }

       //UPDATE
    //    public function update(Request $request, $id)
    // {
    //     $akun = \App\Models\User::find($id);
    //     // $this->validate($request, [
    //     //     'name' => ['required', 'string', 'max:255'],
    //     //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //     //     'roles_id' => ['required', 'string', 'max:255'],
    //     //     'alamat' => ['required', 'string', 'max:255'],
    //     //     'posisi' => ['required', 'string', 'max:255'],
    //     //     'telephone' => ['required', 'string', 'max:255'],
    //     //     'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     // ]);
      
    //         $akun = new user;
    //         $akun->name = $request->input('name');
    //         $akun->email = $request->input('email');
    //         $akun->roles_id = $request->input('roles_id');
    //         $akun->alamat = $request->input('alamat');
    //         $akun->posisi = $request->input('posisi');
    //         $akun->telephone = $request->input('telephone');
    //         $akun->password = Hash::make($request->password);

    //         $akun->update();
    //         if ($akun->roles_id == 1){
    //             return redirect()->route('data-admin')->with('success', 'Data Berhasil Diupdate!');
    //             }elseif ($akun->roles_id == 2){
    //                 return redirect()->route('data-kepala')->with('success', 'Data Berhasil Diupdate!');
    //             }elseif ($akun->roles_id == 3){
    //                 return redirect()->route('datauser')->with('success', 'Data Berhasil Diupdate!');
    //             }
    //     }

       
      //FUNCTION HAPUS DATA USER, ADMIN, KEPALA UNIT
         public function hapususer($id)
            {
                $akun=User::find($id);
                $akun->delete();
                return redirect('/data-user')->with('success', 'Data Berhasil Dihapus!');
            }

          public function hapusadmin($id)
            {
                $akun= User::find($id);
                $akun->delete();
                return redirect('/data-admin')->with('success', 'Data Berhasil Dihapus!');
            }

         public function hapuskepala($id)
            {
                $akun= User::find($id);
                $akun->delete();
                return redirect('/data-kepala')->with('success', 'Data Berhasil Dihapus!');
            }

        public function ubahstatus($id)
        {
            $akun = User::find($id);
            $status_sekarang =$akun->status;
            if($status_sekarang == 1){
                $akun->where('id',$id)->update([
                'status'=>0
                ]);
            }else
            {
                $akun->where('id',$id)->update([
                'status'=>1
                ]);
            }

                if ($akun->roles_id == 1){
                return redirect()->route('data-admin')->with('success', 'Status Pengguna Berhasil diganti!');
                }elseif ($akun->roles_id == 2){
                    return redirect()->route('data-kepala')->with('success', 'Status Pengguna Berhasil diganti!');
                }elseif ($akun->roles_id == 3){
                    return redirect()->route('datauser')->with('success', 'Status Pengguna Berhasil diganti!');
                }

            }

    }

