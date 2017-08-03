@extends('layouts.app')

@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

  <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
				<h2 class="text-center text-primary">Add New Project</h2><br>
            </div>
  <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="storeform" id=""  class="form-horizontal" method="post">
				<input type="hidden" name="_method" value="post" />
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                                             <!----     <div class="alert alert-danger display-hide">
                 <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div> --->
                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-3">Project Name
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input type="text" class="form-control" name="p_name" value="{!! old('p_name') !!}" /> </div>
									  @if ($errors->has('p_name'))
                                    <span class="alert-danger">
                                        <strong>{{ $errors->first('p_name') }}</strong>
                                    </span>
                                @endif
                           
                            </div>
						 </div>
						<div class="form-group">
                            <label class="control-label col-md-3">Project Type
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select name="p_type" id="staff_role" class="selectpicker form-contro">
								<option value="">Select Type</option>
                                    <option value="Residential">Residential</option>
									 <option value="Commercial">Commercial</option>
									  <option value="Other">Other</option>
									  
                                    

                                </select>
								 @if ($errors->has('p_type'))
                                    <span class="alert-danger">
                                        <strong>{{ $errors->first('p_type') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
							
                        </div>    

							   <div class="form-group">
                            <label class="control-label col-md-3">Services
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <div class="checkbox-list" data-error-container="#module_error">
                                    <div>
                                        <label>
                                            <input type="checkbox" value="Detailing" id="" name="serives[]" /> Detailing </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" class="modules" value="Estimation" id="module1" name="serives[]"  /> Estimation </label>
                                    </div>
                                   
                                    <div>
                                        <label>
                                            <input type="checkbox" class="modules" value="Design" id="module3" name="serives[]"  /> Design </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" class="modules" value="Construction" id="module4" name="serives[]"  /> Construction </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" class="modules" value="Review" id="module5" name="serives[]"  /> Review </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" class="modules" value="Inspection" id="module6" name="serives[]" /> Inspection </label>
                                    </div>
                                 </div>
								 
                               
                                <span class=""> (select at least one) </span>
                                <div id="module_error"> </div>
								 @if ($errors->has('serives'))
                                    <span class="alert-danger">
                                        <strong>{{ $errors->first('serives') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                           <div class="form-group">
                            <label class="control-label col-md-3">Comment
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <textarea name="p_comment" class="form-control" rows="3" >{!! old('p_comment') !!}</textarea>
                               
                                <div id="editor_error"> </div>
								 @if ($errors->has('p_comment'))
                                    <span class="alert-danger">
                                        <strong>{{ $errors->first('p_comment') }}</strong>
                                    </span>
                                @endif
                            </div>
							
                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-3">Terms & Conditions
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <div class="checkbox-list" data-error-container="#module_error">
                                   
                                         <label>   <input type="checkbox" value="Agree" id="" name="p_term" /> I Agree </label>
                                   
                              </div>
                                <div id="module_error"> </div>
								 @if ($errors->has('p_term'))
                                    <span class="alert-danger">
                                        <strong>{{ $errors->first('p_term') }}</strong>
                                    </span>
                                @endif
                            </div>
							
                        </div>
						
						
                       </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button style="background-color:#32c5d2" type="submit" class="btn green">Create Project</button>
                               
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
			
			
			</div>
			@endsection