<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function bookAuthor() { // knyga priklauso autoriui
        // daug knygu gali priklausyti autoriui
        // autorius gali tureti daug knygu
        return $this->belongsTo('App\Author', 'author_id', 'id');
    }
}
