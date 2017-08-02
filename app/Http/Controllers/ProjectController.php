<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ProjectRequest;
use App\projects;
use App\project_services;
use DB;




class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $project_data = projects::
                with('project_services')
                ->get();
	
          return view('view-project',compact('project_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
		
		
        return view('add-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
       $method = $request->method();
        if ($request->isMethod('post')) {
			
			 $name = $request->input('p_name'); 
             $type = $request->input('p_type'); 
			 $serives = $request->input('serives'); 
			$p_comment= $request->input('p_comment'); 
			 $p_term= $request->input('p_term'); 
			
         $dataSet = [
        'name'  => $name,
        'type'  => $type,        
        'comments'    => $p_comment,
		 'terms'    => $p_term,
		  'created_at'    => date("Y-m-d H:i:s"),
		   'updated_at'    => date("Y-m-d H:i:s"),
     ];
       
      //Insert dta into DB
          $id =  DB::table('projects')->insertGetId($dataSet);
		 foreach ($serives as $key => $value) {
			 
			

                    $row["services"] = $value;
                    $row["project_idFK"] = $id;
					 $row["created_at"] = date("Y-m-d H:i:s");
					  $row["updated_at"] = date("Y-m-d H:i:s");
					
                     DB::table('project_services')->insert($row);
                    
                }
             $request->session()->flash('alert-success', 'Project Added Sucessfully!');
           return redirect('/index')->with(['message' => 'Project Added Sucessfully.']); 
        }

       
      
		
		
		}
	  
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
