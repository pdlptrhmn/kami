<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merekk extends Model
{
    //
     protected $fillable = [
        'merek'];


    public function Iklan(){

	return $this->belongsTo('App\Iklan');


}
}
