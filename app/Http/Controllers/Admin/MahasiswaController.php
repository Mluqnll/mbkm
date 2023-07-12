<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.mahasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->program_studi = request('program_studi');
        $mahasiswa->nomor_hp = request('nomor_hp');
        $mahasiswa->save();

        return redirect('mahasiswa')->with('succes', 'Data Berhasil Disimpan');
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
    public function edit(string $mahasiswa)
    {
        $data['mahasiswa'] = Mahasiswa::find($mahasiswa);
        return view('admin.mahasiswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($mahasiswa);
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->program_studi = request('program_studi');
        $mahasiswa->nomor_hp = request('nomor_hp');
        $mahasiswa->save();

        return redirect('mahasiswa')->with('succes', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($mahasiswa);
        $mahasiswa->delete();
        return back()->with('danger', 'Data Berhasil diHapus');
    }
}
