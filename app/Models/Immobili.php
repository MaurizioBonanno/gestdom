<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Immobili extends Model
{
    protected $table = 'immobili';

    public function getPathAttribute(){

        $url = 'storage/'.$this->immagine;

        return $url;
    }
}
