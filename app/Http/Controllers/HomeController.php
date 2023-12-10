<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         if(Auth::user()->roles == 'admin'){
            return redirect('/dashboard/admin');
        }elseif (Auth::user()->roles == 'dosen'){
            return redirect('/dashboard/dosen');
        }elseif (Auth::user()->roles == 'mahasiswa'){
            return redirect('/dashboard/mahasiswa');
        }
        
        //return view('dashboard');
    }

    public function admin()
    {
        $jumlah_admin = number_format(User::where('roles', 'admin')->count());
        $jumlah_dosen = number_format(Dosen::count());
        $jumlah_mahasiswa = number_format(Mahasiswa::count());
        
        $jumlah_matkul = number_format(Matakuliah::count());
        $jumlah_pengguna = number_format(User::count());

        $dataPengguna = User::select('roles', DB::raw('COUNT(*) as jumlah_user'))
            ->groupBy('roles')
            ->get();

        $queryPengguna = $dataPengguna->mapWithKeys(function ($item){
                return [$item->roles => $item->jumlah_user];
            });

        return view('pages.admin.dashboard',compact([
            'jumlah_admin',
            'jumlah_dosen',
            'jumlah_mahasiswa',
            'jumlah_matkul',
            'jumlah_pengguna',
            'queryPengguna',
        ]));
    }

    public function dosen()
    {
        return view('pages.dosen.dashboard');
    }

    public function mahasiswa()
    {
        return view('pages.mahasiswa.dashboard');
    }
}
