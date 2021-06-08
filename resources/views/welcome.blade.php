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
	
	<h2 class="a text-center">Create,Read,Update And Delete</h2>
	<div class="row">
  <div class="col-sm-8">
    <div class="card">
	<div class="card-header">
    All Student
	@if(session('delete'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('delete')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
	@if(session('update'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
  </div>
      <div class="card-body">
       <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">University ID</th>
    </tr>
  </thead>
  <tbody>
  @php($i=1)
 
    @foreach($student as $value)
	<tr>
	<td>{{$i++}}</td>
	<td>{{$value->Name}}</td>
	<td>{{$value->Dep}}</td>
	<td>{{$value->UID}}</td>
	<td>
	<a href="student/edit/{{$value->id}}" class="btn btn-primary">Edit</a>
	<a href="student/delete/{{$value->id}}" class="btn btn-danger">Delete</a>
	
	</td>
	
	</tr>
	@endforeach
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
	<div class="card-header">
    Add New Student
	@if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
  </div>
      <div class="card-body">
        <form action="{{url('/store')}}" method="POST">
		@csrf
  <div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" placeholder="Enter Your Name" class="form-control @error('name') is-invalid @enderror" />
  @error('name')
  <strong class="text-danger">{{$message}}</strong>
  @enderror
 </div>
 <div class="form-group">
  <label for="">Department</label>
  <input type="text" name="dep" placeholder="Enter Your Department" class="form-control @error('name') is-invalid @enderror" />
  @error('dep')
  <strong class="text-danger">{{$message}}</strong>
  @enderror
 </div>
 <div class="form-group">
  <label for="">University ID</label>
  <input type="text" name="uid" placeholder="Enter Your University ID" class="form-control @error('name') is-invalid @enderror" />
  @error('uid')
  <strong class="text-danger">{{$message}}</strong>
  @enderror
 </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
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