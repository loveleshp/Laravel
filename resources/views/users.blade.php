<style>
body {
	width: 100%;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
	color: purple;
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: gray !important;
}
h3{
	color: darkred;
  text-align: center;
}

.add {
	width: 100%;
	display: flex;
	justify-content: center;
	text-align: center;
	margin: 30px 0;
}
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<body>
	<div class="add">
		<a class="btn btn-info text-center" href="/add">Add Member</a>
	</div>

	<div class="d-flex justify-content-center">
		 <table class="table" border="1" id="customers">
			@csrf
			<tr>
				<th><h3>ID</h3></th> 
				<th><h3>Firstname</h3></th> 
				<th><h3>Operation1</h3></th> 
				<th><h3>Operation2</h3></th> 
			</tr>
			@foreach($stud as $Members)
			<tr>
			     <td>{{$Members['id']}}</td> 
			     <td>{{$Members['firstname']}}</td> 
			     <td><a class="btn btn-primary" href={{"edit/$Members->id"}}>Update</a></td>
			     <td><a class="btn btn-danger" href={{"delete/$Members->id"}}>Delete</a></td>     
			 </tr>
			 @endforeach
		</table>

</div>
<div class="d-flex justify-content-center">
	{{$stud -> links("pagination::bootstrap-4")}}
</div>

</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
