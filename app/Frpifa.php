<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frpifa extends Model {

	protected $fillable = ['cedula', 'fecha_cuestionario', 'user_id'];

	protected $dates = ['fecha_cuestionario'];

    public function user($value=''){
    	return $this->belongsTo(User::class);
    }
}
