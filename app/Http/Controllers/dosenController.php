<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class dosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.indexdosen', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.createdosen');
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nidn' => 'required|string|max:10|unique:dosen',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $validateData['foto'] = $pathFoto;

        $dosen = Dosen::create($validateData);

        if ($dosen) {
            return to_route('dosen.index')->with('success', 'Berhasil Menambah Data Dosen');
        } else {
            return to_route('dosen.index')->with('failed', 'Gagal Menambah Data Dosen');
        }
    }


    public function edit(Dosen $dosen)
    {
        return view('dosen.editdosen',  compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validateData = $request->validate([
            'nidn' => 'required|string|max:10|unique:dosen,nidn,' . $dosen->id,
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $validateData['foto'] = $pathFoto;

        $dosen->update($validateData);

        if ($dosen) {
            return to_route('dosen.index')->with('success', 'Berhasil Mengubah Data Dosen');
        } else {
            return to_route('dosen.index')->with('failed', 'Gagal Mengubah Data Dosen');
        }
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        if ($dosen) {
            return to_route('dosen.index')->with('success', 'Berhasil Hapus Data Dosen');
        } else {
            return to_route('dosen.index')->with('failed', 'Gagal Hapus Data Dosen');
        }
    }
}
