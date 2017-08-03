@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <a href="add_project" ><button  type="button" class="btn default">Create New Project</button></a>
        <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>                   
<div class="container">
  <h2>All Projects</h2>
  <p>All projects are showing here in table</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Project Name</th>
        <th>Project Type</th>
        <th>Services </th>
		<th>Comments  </th>
		<th>Terms & Conditions </th>
      </tr>
    </thead>
    <tbody>
	@foreach ($project_data as $projects)
	
	 
	
      <tr>
        <td>{{$projects['name']}}</td>
        <td>{{$projects['type']}}</td>
		<td>
		@foreach ($projects["project_service"] as $service)
	    <?php
	    $temp="";
			$services=$temp.",".$service["services"];
	    ?>
	   {{$services}} 
	   @endforeach
	</td>
		<td>{{$projects['comments']}}</td>
        <td>{{$projects['terms']}}</td>
      </tr>
	  
	  
	    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
@endsection