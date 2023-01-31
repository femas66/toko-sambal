<?php

namespace App\Http\Controllers;

use App\Models\Sambal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index() {
        $data = Sambal::paginate(5);
        //dd($data);
        return view('dashboard', compact('data'));
    }
    public function tambah(Request $request) {
        $filename = $request->file->hashName();
        $request->file->move(base_path('/public/img'), $filename);

        $data = [
            'img' => $filename,
            'nama-sambal' => $request->input('nama-sambal'),
            'level-sambal' => $request->input('level-sambal'),
            'stok' => $request->input('stok'),
            'harga' => $request->input('harga')
        ];
        Sambal::create($data);
        return redirect()->route('dashboard');
    }
    public function hapus(Request $request, $id) {
        $data = Sambal::find($id);
        $img = base_path('/public/img/') . $data->img;
        unlink($img);
        $data->delete();
        return redirect()->route('dashboard');
    }

    public function editView($id) {
        $sambal = Sambal::find($id);
        return view('edit', compact('sambal'));
    }

    public function actionEdit(Request $request, $id) {
        $data = [
            'nama-sambal' => $request->input('nama-sambal'),
            'level-sambal' => $request->input('level-sambal'),
            'stok' => $request->input('stok'),
            'harga' => $request->input('harga')
        ];
        $s = Sambal::find($id);
        $s->update($data);
        return redirect()->route('dashboard');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}