<?php

namespace App\Http\Controllers;

use App\Models\Sambal;
use Illuminate\Http\Request;


class GantigambarController extends Controller
{
    public function editgambar(Request $request, $id) {
        $sambal = Sambal::find($id);
        return view('updateimg', compact('sambal'));
    }
    public function actionEditGambar(Request $request) {
        $file = $request->file('avatar');
        $name = $file->hashName();
        $file->move(base_path('/public/img'), $name);
        $data = [
            'img' => $name
        ];
        $s = Sambal::find($request->input('id'));
        $urlimg = 'img'. '/' . $s->img;
        unlink($urlimg);x
        $s->update($data);
        return redirect ('/dashboard');
    }
}
