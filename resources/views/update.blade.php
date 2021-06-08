<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>
	
	<div class="container">

	
	<div class="row">
  <div class="col-sm-8">
    <div class="card">
	<div class="card-header">
    Update Student
	
  </div>
      <div class="card-body">
	  
	  <form action="{{url('student/update/'.$edit->id)}}" method="POST">
		@csrf
  <div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" placeholder="Enter Your Name" class="form-control @error('name') is-invalid @enderror" value="{{$edit->Name}}" />
  @error('name')
  <strong class="text-danger">{{$message}}</strong>
  @enderror
 </div>
 <div class="form-group">
  <label for="">Department</label>
  <input type="text" name="dep" placeholder="Enter Your Department" class="form-control @error('name') is-invalid @enderror" value="{{$edit->Dep}}" />
  @error('dep')
  <strong class="text-danger">{{$message}}</strong>
  @enderror
 </div>
 <div class="form-group">
  <label for="">University ID</label>
  <input type="text" name="uid" placeholder="Enter Your University ID" class="form-control @error('name') is-invalid @enderror" value="{{$edit->UID}}" />
  @error('uid')
  <strong class="text-danger">{{$message}}</strong>
  @enderror
 </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{url('/')}}" class="btn btn-primary">Back</a>
</form>
	  
	  
	  
	  </div>
    </div>
  </div>
  
</div>
	
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>