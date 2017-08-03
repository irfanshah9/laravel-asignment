<?php

namespace App;
use App\project_services;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
     protected $table = 'projects';

	public $timestamps = true;
	
	public function project_service	(){
    	return $this->hasMany('App\project_services','project_idFK','id');
    }
}
