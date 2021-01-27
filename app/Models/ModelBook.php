<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table ='books';
    protected $fillable =['title','pages','price','id_user'];


    public function relUsers(){
        return $this->hasOne('App\User','id','id_user');
    }
}
