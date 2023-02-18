<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable =['url', 'user_id'];


    //RELACION UNO A MUCHOS INVERSA
    public function user(){
        return $this->belongsTo('App\user');
    }
}
