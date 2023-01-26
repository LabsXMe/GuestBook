<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Souvenir;
use DataTables;

class SouvenirController extends Controller
{
    public function create(Request $request): View 
    {
        return view('input_souvenir');
    }

    public function saver(Request $request){
        $model = new Souvenir();
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->prioritas = $request->prioritas;
        $model->status = 1;
        $model->save();
        return redirect()->back();
    }

    public function datatable(Request $request){
        $model = Souvenir::query();
        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->toJson();
    }
}
