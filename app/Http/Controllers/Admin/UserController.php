<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_user'] = Admin::all();
        return view('admin.pengelola.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengelola.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = New Admin;
        $user->username = request('username');
        $user->password = request('password');
        $user->handleUploadFoto();
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Disimpan');
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
    public function edit(string $user)
    {
        $data['user'] = Admin::find($user);
        return view('admin.pengelola.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($user)
    {
        $user = Admin::find($user);
        $user->username = request('username');
        $user->password = request('password');
        if (request('foto')) $user->handleUploadFoto();
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $user)
    {
        $user = Admin::find($user);
        $user->handleDelete();
        $user->delete();
        return back()->with('danger', 'Data Berhasil diHapus');
    }
}
