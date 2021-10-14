<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.form{
padding: 14px 20px;
 margin: 0px 0px;
 background-color: darkkhaki;
 text-align: center;
 border: 2px solid darkblue;
}

 h1{
 	text-align: center;
  color:yellowgreen;
 }

 .lable{
  color: darkred;

 }

</style>
</head>

<body>
	<div class="container col-md-4  my-4 justify-content-center">
 	<h1>UPDATE</h1>
  <form class="form" action="/edit" method="POST">
	@csrf
	 <div class="form-group">
     <label class="lable" for="id">ID:</label><br>
	 <input type="number" name="id" value="{{$data['id']}}"><br><br>
	 </div>
	 <div class="form-group">
     <label class="lable" for="fname">First name:</label><br>
	 <input type="text" name="firstname" value="{{$data['firstname']}}"><br><br>
	 </div>
	 <button type="submit" class="btn btn-danger">SAVE</button><br><br>
  </form>
 </div>
</body>
