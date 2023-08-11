<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
    
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="#" class="btn btn-danger btn-sm" onclick="hapusUser(' . $row->id . ')">Hapus</a>';
                    return $btn;
                })
                ->toJson();
        }
    
        return view('users.index');
    }

    public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    
    return response()->json(['message' => 'Pengguna berhasil dihapus']);
}

    

}
