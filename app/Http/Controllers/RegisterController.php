<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => ['required', 'max:255'],
            'nama' => 'required|max:255',
            'gender' => 'required|max:255',
            'alamat' => 'required|max:255'
        ]);
        // dd('s');

        $karyawan = new Karyawan;
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->gender = $request->gender;
        $karyawan->alamat = $request->alamat;
        $karyawan->save();

        if ($karyawan) {
            return redirect('/login');
        } else {
            return back()->withInput()->with('msgError', 'gagal register');
        }        
    }
}
