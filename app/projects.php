<?php

namespace App;
use App\project_services;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
     protected $table = 'project_services';

	public $timestamps = true;
	
	public function project_services	(){
    	return $this->belongsTo('App\project_services','project_idFK','id');
    }
}
