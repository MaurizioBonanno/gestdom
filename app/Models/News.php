<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function getPathAttribute(){

        $url = $this->immagine;

        if(stristr($this->immagine,'http')===false){
            $url = 'storage/'.$this->immagine;
        }

        return $url;
    }

}
