<?php

namespace App;
use App\projects;
use Illuminate\Database\Eloquent\Model;

class project_services extends Model
{
     protected $table = 'project_services';
	

	public $timestamps = true;
        // public function project_services(){
    //	return $this->belongsTo('App\projects','id','project_idFK');
//}
}