<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Yajra\DataTables\Facades\DataTables;


class SiswaController extends Controller
{
    public function index(Request $request)
{
    if ($request->ajax()) {
        $data = Siswa::latest()->get(); // Ambil data siswa dari model Siswa
        
        return DataTables::of($data)->toJson();
    }

    return view('siswa.index');
}

public function create()
{
    return view('siswa.create');
}

public function store(Request $request)
{
    $request->validate([
        'nis' => 'required|unique:siswa,nis',
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'phone' => 'nullable',
        'email' => 'nullable|email',
        'gender' => 'required|in:Male,Female',
    ]);

    Siswa::create([
        'nis' => $request->nis,
        'nama' => $request->nama,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'phone' => $request->phone,
        'email' => $request->email,
        'gender' => $request->gender,
    ]);

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan.');
}

public function destroy($id)
{
    $siswa = Siswa::findOrFail($id);
    $siswa->delete();

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
}
public function edit($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('siswa.edit', compact('siswa'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nis' => 'required|unique:siswa,nis,' . $id,
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'phone' => 'nullable',
        'email' => 'nullable|email',
        'gender' => 'required|in:Male,Female',
    ]);

    $siswa = Siswa::findOrFail($id);

    $siswa->update([
        'nis' => $request->nis,
        'nama' => $request->nama,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'phone' => $request->phone,
        'email' => $request->email,
        'gender' => $request->gender,
    ]);

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
}

}
