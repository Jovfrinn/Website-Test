<?php

namespace App\Http\Controllers;

use App\Models\DataKelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userSiswa = Siswa::where('user_id', Auth::user()->id)->first();
        if($userSiswa == null){
            $siswaKelas = null;
            $kelas = null;
        }
        else {
            $siswaKelas = Siswa::where('kelas_id', $userSiswa->kelas_id)->get();
            $kelas = DataKelas::where('id', $userSiswa->kelas_id)->first();
            
        }
        
        $data['userSiswa'] = $userSiswa;
        $data['siswaKelas'] = $siswaKelas;
        $data['kelas'] = $kelas;
        return view('siswa.home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nama = Auth::user()->name;

        return view('siswa.inputForm', compact('nama'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'user_id' => Auth::user()->id,
        ]);

        User::updated([
            'name' => $request->nama_lengkap,
        ]);

        return redirect()->route('siswa.home')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $siswa = Siswa::where('user_id', $id)->first();
        return view('siswa.editData', compact('siswa'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::find($id);

        $siswa->update([
            'nama_lengkap' => $request->nama_lengkap,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('siswa.home')->with('success', 'Data berhasil diubah'); // Redirect to the index page or any other appropriate redirec
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
