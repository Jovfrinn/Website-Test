<?php

namespace App\Http\Controllers;

use App\Models\DataKelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countSiswa = Siswa::count();
        $countKelas = DataKelas::count();

        $data['countSiswa'] = $countSiswa;
        $data['countKelas'] = $countKelas;
        return view('adminsekolah.home', $data);
    }

    public function class(){
        $kelas = DataKelas::all(); // Mengambil semua data kelas dari databasen

        return view('adminsekolah.indexClass',compact('kelas')); // Mengirimkan data kelas ke view 'adminsekolah.indexClass'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminsekolah.createClass'); // Ganti dengan nama view yang sesuai dengan form inputan kelas yang ingin ditambahkan atau edit
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataKelas::create([
            'nama_kelas' => $request->input('nama-kelas'),
            'wali_kelas' => $request->input('wali-kelas'),
        ]);
        return redirect()->route('admin.class')->with('success', 'Data kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataKelas = DataKelas::with('siswa')->findOrFail($id);

        return view('adminsekolah.detailClass',compact('dataKelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = DataKelas::findOrFail($id);

        return view('adminsekolah.editClass', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelas = DataKelas::findOrFail($id);
        $kelas->update([
            'nama_kelas' => $request->input('nama-kelas'),
            'wali_kelas' => $request->input('wali-kelas'),
        ]);
        return redirect()->route('admin.detailClass',$id)->with('success', 'Data kelas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKelas = DataKelas::findOrFail($id);
        $dataKelas->delete();
        return redirect()->route('admin.class')->with('success', 'Data kelas berhasil dihapus.');
    }


    // -------------------


    public function indexSiswa()
    {
        $dataSiswa = Siswa::orderBy('created_at', 'desc')->get();
        
        return view('adminsekolah.indexSiswa', compact('dataSiswa'));
    }

    public function editSiswa(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $dataKelass = DataKelas::all();
        $initial = $dataKelass->where('id', $siswa->kelas_id)->first() ? $dataKelass->where('id', $siswa->kelas_id)->first() : null;
     

        $data['siswa'] = $siswa;
        $data['datakelas'] = $dataKelass;
        $data['initial'] = $initial;

        return view('adminsekolah.editSiswa', $data);
    }

    public function updateSiswa(Request $request, string $id)   
    {
        $kelas = Siswa::findOrFail($id);
        $kelas->update([
            'nisn' => $request->input('nisn'),
            'nama_lengkap' => $request->input('nama-lengkap'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->route('admin.siswa',$id)->with('success', 'Data kelas berhasil diperbarui.');
    }

    public function destroySiswa(string $id)
    {
        $dataSiswa = Siswa::findOrFail($id);
        $dataSiswa->delete();
        return redirect()->route('admin.siswa')->with('success', 'Data kelas berhasil dihapus.');
    }

}
