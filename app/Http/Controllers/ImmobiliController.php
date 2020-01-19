<?php

namespace App\Http\Controllers;

use App\Models\Immobili;
use App\Models\Tipologie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImmobiliController extends Controller
{
    //
    public function index(Request $request){

        // $queryBuilder = Immobili::orderBy('id','DESC');
        // $res = $queryBuilder->get();
        $sql ="SELECT i.id,titolo,descrizione,immagine,tipologia,prezzo,metri,
        camere,bagni,indirizzo,prezzo  from immobili as i INNER JOIN tipologie as t ON i.tipo_id = t.id";
        $res = DB::select($sql);
        return view('admin.immobili',['immobili'=>$res]);
    }

    public function delete($id){
        $immobile = Immobili::find($id);
        $img = $immobile->immagine;
        $res = $immobile->delete();
        Storage::disk('public')->delete($img);
        return ''.$res;
    }

    public function edit($id){

        $sql ="SELECT i.id,titolo,descrizione,immagine,tipologia,prezzo,metri,
        camere,bagni,indirizzo,prezzo  from immobili as i INNER JOIN tipologie as t
        ON i.tipo_id = t.id
        where i.id=".$id;
        $res = DB::select($sql);

        $tipologie = Tipologie::all();

        //dd($tipologie);

        return view('admin.edit_immobili',['tipologie'=>$tipologie, 'immobile'=>$res[0]]);

    }

    public function updated($id,Request $request){
        $immobile = Immobili::find($id);
        $immobile->titolo = request()->input('titolo');
        $immobile->descrizione = request()->input('descrizione');
        //tipologia
        $immobile->tipo_id = request()->input('tipologia');

        //immagine
        if(request()->hasFile('immagine')){
            $file = request()->file('immagine');
            $fileName = $file->store(env('ALBUM_THUMB_DIR'));
            $immobile->immagine = $fileName;
        }

        $immobile->metri = request()->input('metri');
        $immobile->bagni = request()->input('bagni');
        $immobile->camere = request()->input('camere');
        $immobile->indirizzo = request()->input('indirizzo');
        $immobile->prezzo = request()->input('prezzo');

        $immobile->save();

        return redirect()->route('immobili');
    }

    public function new(){
        $tipologie = Tipologie::all();

        return view('admin.addimmobile',['tipologie'=>$tipologie]);
    }

    public function savenew(Request $request){
       $immobile = new Immobili();
       $immobile->titolo = request()->input('titolo');
       $immobile->descrizione = request()->input('descrizione');
       $immobile->tipo_id = request()->input('tipologia');
       //l'immagine
       $file = request()->file('immagine');
       $filename = $file->store(env('ALBUM_THUMB_DIR'));
       $immobile->immagine = $filename;

       $immobile->metri = request()->input('metri');
       $immobile->bagni = request()->input('bagni');
       $immobile->camere = request()->input('camere');
       $immobile->indirizzo = request()->input('indirizzo');
       $immobile->prezzo = request()->input('prezzo');

       $immobile->save();

       return redirect()->route('immobili');
    }
}
