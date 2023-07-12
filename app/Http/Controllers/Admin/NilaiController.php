<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_nilai'] = Nilai::all();
        return view('admin.nilai.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.nilai.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nilai = new Nilai;
        $nilai->nim_mahasiswa = request('nim_mahasiswa');
        $nilai->mata_kuliah = request('mata_kuliah');
        $nilai->nilai = request('nilai');
        $nilai->save();

        return redirect('nilai')->with('succes', 'Data berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nilai)
    {
        $nilai = Nilai::find($nilai);
        $nilai->delete();
        return back()->with('danger', 'Data Berhasil diHapus');    }

    public function cekNama($id)
    {
        $data = Mahasiswa::find($id);
        if ($data)
            return $data;
        return "false";
    }
}
