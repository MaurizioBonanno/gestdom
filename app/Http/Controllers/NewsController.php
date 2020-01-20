<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    //
    public function frontend_new($id){
       return view('detailnew');
    }

    public function frontend_index(){
        $queryBuilder = News::orderBy('id','DESC');
        $news = $queryBuilder->get();
        return view('news',['news'=>$news]);
    }
    public function index(Request $request){
        $queryBuilder = News::orderBy('id','DESC');
        $news = $queryBuilder->get();
        return view('admin.news',['news'=>$news]);
    }

    public function delete($id){
       //Storage

       $new = News::find($id);

        $img = $new->immagine;

        $res = $new->delete();
        Storage::disk('public')->delete($img);
        return ''.$res;
    }

    public function edit($id){
        $new = News::find($id);
        return view('admin.editnew',['new'=>$new]);
    }

    public function update($id , Request $request){
        $new = News::find($id);
        $new->titolo = request()->input('titolo');
        $new->descrizione = request()->input('descrizione');
        $new->link = request()->input('link');

        //controllo che sia stato inviato un file
        if($request->hasFile('immagine')){
            $file = $request->file('immagine'); //mi prendo il file inviato
            $fileName = $file->store(env('ALBUM_THUMB_DIR'));//il metodo immagazzina l'immagine e genera un nome univoco
            $new->immagine = $fileName;//assegno il nome alla news
        }

        $new->save();

        return redirect()->route('news');
    }

    public function addnew(){
        return view('admin.add_new');
    }

    public function savenew(Request $request){
        $new = new News();
        $new->titolo = request('titolo');
        $new->descrizione = request('descrizione');
        $new->link = request()->input('link');
                //controllo che sia stato inviato un file
                if($request->hasFile('immagine')){
                    $file = $request->file('immagine'); //mi prendo il file inviato
                    $fileName = $file->store(env('ALBUM_THUMB_DIR'));//il metodo immagazzina l'immagine e genera un nome univoco
                    $new->immagine = $fileName;//assegno il nome alla news
                }

        $new->save();

        return redirect()->route('news');

    }
}
