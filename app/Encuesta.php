<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model{

	protected $fillable = ['cedula', 'nombre', 'fecha_encuesta', 'user_id'];

	protected $dates = ['fecha_encuesta'];

    public function user($value=''){
    	return $this->belongsTo(User::class);
    }
}
