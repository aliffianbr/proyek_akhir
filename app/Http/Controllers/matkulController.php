<?php

namespace App\Http\Controllers;
use App\Models\Matkul;
use Illuminate\Http\Request;

class matkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::all();
        return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'kode' => 'required|string|max:10|unique:matkul',
            'matkul' => 'required|string',
            'kelas' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pengajar' => 'required|string',
            'jam' => 'required|date_format:H:i',
        ]);

        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $validateData['foto'] = $pathFoto;

        $matkul = Matkul::create($validateData);

        if ($matkul) {
            return to_route('matkul.index')->with('success', 'Berhasil Menambah Mata Kuliah');
        } else {
            return to_route('matkul.index')->with('failed', 'Gagal Menambah Mata Kuliah');
        }
    }


    public function edit(Matkul $matkul)
    {
        // $mahasiswa = Mahasiswa::all();
        return view('matkul.edit',  compact('matkul'));
    }

    public function update(Request $request, matkul $matkul)
    {
        $validateData = $request->validate([
            'kode' => 'required|string|max:10|unique:matkul,kode,' . $matkul->id,
            'matkul' => 'required|string',
            'kelas' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pengajar' => 'required|string',
            'jam' => 'required|date_format:H:i',
        ]);

        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $validateData['foto'] = $pathFoto;

        $matkul->update($validateData);

        if ($matkul) {
            return to_route('matkul.index')->with('success', 'Berhasil Mengubah Data Mata Kuliah');
        } else {
            return to_route('matkul.index')->with('failed', 'Gagal Mengubah Data Mata Kuliah');
        }
    }

    public function destroy(Matkul $matkul)
    {
        $matkul->delete();

        if ($matkul) {
            return to_route('matkul.index')->with('success', 'Berhasil Hapus Mata Kuliah');
        } else {
            return to_route('matkul.index')->with('failed', 'Gagal Hapus Data Mata Kuliah');
        }
    }
}
