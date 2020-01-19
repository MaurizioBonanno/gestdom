<?php

namespace App\Http\Controllers;

use App\Models\Tipologie;
use Illuminate\Http\Request;

class TipologieController extends Controller
{
    //
    public function index(Request $request)
    {
        $tipologie = Tipologie::orderBy('id', 'DESC')->get();

        return view('admin.tipologie', ['tipologie'=>$tipologie]);
    }

    public function update($id, Request $req)
    {
        $tipologia = Tipologie::find($id);
        $tipologia->tipologia = request()->input('tipo');
        $res = $tipologia->save();

        $msg = $res ? 'Aggiornamento riuscito' : 'Ops aggiornamento non riuscito';
        session()->flash('message',$msg);
        return redirect()->route('index_tipologie');
    }

    public function edit($id)
    {
        $tipologia = Tipologie::find($id);
        return view('admin.edit_tipo',['tipologia'=>$tipologia]);
    }
}
