@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	@section('content')
		@if(Auth::check())				
				
				<div class="container">           
				  <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>Email</th>
				        <th>Role</th>
				      </tr>
				    </thead>
			@foreach($id as $id)
				    <tbody>
				      <tr>
				        <td>{{$id->name}}</td>
				        <td>{{$id->email}}</td>
				        <td>{{$id->userrole}}</td>
				        <td><a href="adminPannel/{{$id->id}}/editapuser">Edit</a></td>
				        <td>
				        	<form action="adminPannel/{{$id->id}}/delete" method="POST">
					        	@csrf
					        	<button type="submit">Delete</button>
					        </form>
				        </td>
				      </tr>
				    </tbody>
			@endforeach
				  </table>
				</div>

		@endif
		
	@endsection

</body>
</html>

