<?php

namespace App\Http\Controllers;

use App\Models\Immobili;
use App\Models\Photos;
use App\Models\Tipologie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImmobiliController extends Controller
{


    public function casa($id){
        //recupero le foto
        $sqlPhoto = "Select * from photos where photos.immobile_id =".$id." order by position asc";
        $photos=DB::select($sqlPhoto);
        $sqlImmobile = "SELECT i.id,titolo,descrizione,immagine,tipologia,prezzo,metri,
        camere,bagni,indirizzo,prezzo  from immobili as i INNER JOIN tipologie as t ON i.tipo_id = t.id where i.id=".$id;
        $immobile = DB::select($sqlImmobile);
        //dd($immobile);

        return view('casa',['photos'=>$photos,'casa'=>$immobile[0]]);

    }

    public function frontend_index(){
        $sql ="SELECT i.id,titolo,descrizione,immagine,tipologia,prezzo,metri,
        camere,bagni,indirizzo,prezzo  from immobili as i INNER JOIN tipologie
         as t ON i.tipo_id = t.id order by i.id desc";
        $res = DB::select($sql);
        return view('immobili',['immobili'=>$res]);
    }
    public function index(Request $request){

        // $queryBuilder = Immobili::orderBy('id','DESC');
        // $res = $queryBuilder->get();
        $sql ="SELECT i.id,titolo,descrizione,immagine,tipologia,prezzo,metri,
        camere,bagni,indirizzo,prezzo  from immobili as i INNER JOIN tipologie
        as t ON i.tipo_id = t.id order by i.id desc";
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

    //recupero tutte le photo
    public function photo($id){
        $images = Photos::where('immobile_id',$id)->orderBy('position','asc')
        ->get();
        return view('admin.photo',['id_immobile'=>$id,'images'=>$images]);
    }

    public function savephoto($id, Request $request){
        $photo = new Photos();
        $photo->immobile_id = $id;

        $file = request()->file('immagine');
        $filename = $file->store(env('ALBUM_THUMB_DIR'));
        $photo->path = $filename;

        $photo->save();
        $rotta = 'admin/photo/'.$photo->immobile_id;

        return redirect($rotta);
    }

    public function savegallery($id, Request $request){


        foreach($request->file('immagine') as $file){
            $photo = new Photos();
            $photo->immobile_id = $id;
            $filename = $file->store(env('ALBUM_THUMB_DIR'));
            $photo->path = $filename;
            $photo->save();
        }

       // $file = request()->file('file');




        $rotta = 'admin/photo/'.$photo->immobile_id;

        return redirect($rotta);
    }


    public function reordergallery(Request $request){

        $count=1;
        $sql="";
        foreach( request()->input('id') as $id_photo){
           $sql.=" photo n".$id_photo." position".$count;
           $photo = Photos::find($id_photo);
           $photo->position = $count;
           $photo->save();
           $count++;
        }

        return $sql;

    }

    public function deletephoto($id){
        $photo =Photos::find($id);
        //recupero il percorso della foto
        $path = $photo->path;
        Storage::disk('public')->delete($path);
        $res = $photo->delete();

        return ''.$res;
    }
}
