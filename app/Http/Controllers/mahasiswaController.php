<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class mahasiswaController extends Controller
{
    public function index() 
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create() 
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'fakultas' => 'required|string',
        ]);

        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $validateData['foto'] = $pathFoto;

        $mahasiswa = Mahasiswa::create($validateData);

        if ($mahasiswa) {
            return to_route('mahasiswa.index')->with('success', 'Berhasil Menambah Data Mahasiswa');
        } else {
            return to_route('mahasiswa.index')->with('failed', 'Gagal Menambah Data Mahasiswa');
        }

    }


    public function edit(Mahasiswa $mahasiswa) 
    {
        // $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.edit',  compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,'. $mahasiswa->id,
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'fakultas' => 'required|string',
        ]);

        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $validateData['foto'] = $pathFoto;

        $mahasiswa->update($validateData);

        if ($mahasiswa) {
            return to_route('mahasiswa.index')->with('success', 'Berhasil Mengubah Data Mahasiswa');
        } else {
            return to_route('mahasiswa.index')->with('failed', 'Gagal Mengubah Data Mahasiswa');
        }
    }

    public function destroy(Mahasiswa $mahasiswa) {
        $mahasiswa->delete();

        if ($mahasiswa) {
            return to_route('mahasiswa.index')->with('success', 'Berhasil Hapus Data Mahasiswa');
        } else {
            return to_route('mahasiswa.index')->with('failed', 'Gagal Hapus Data Mahasiswa');
        }
    }
}
