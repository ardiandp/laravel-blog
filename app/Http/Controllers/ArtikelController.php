<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ArtikelController extends Controller
{
    /*public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Artikel::select(['id', 'judul', 'judul_seo', 'artikel', 'publish']);
            return DataTables::of($data)->toJson();
        }
        return view('artikel.index');
    } */

    public function index(Request $request)
    {
    if ($request->ajax()) {
        $data = Artikel::select(['id', 'judul', 'judul_seo', 'artikel', 'publish']);
        
        return DataTables::of($data)
            ->addColumn('edit', function ($row) {
               // return '<a href="' . route('artikel.edit', ['id' => $row->id]) . '" class="btn btn-primary btn-sm">Edit</a>';
               return '<a href="' . route('artikel.edit', ['id' => $row->id]) . '" class="btn btn-primary btn-sm">Edit</a>' .
               '<a href="#" class="btn btn-danger btn-sm ml-2" onclick="hapusArtikel(' . $row->id . ')">Hapus</a>';
        

            })
            ->toJson();
    }
    return view('artikel.index');
}


    public function edit($id)
    {
    $artikel = Artikel::findOrFail($id);
    return view('artikel.edit', compact('artikel'));
    }

}
