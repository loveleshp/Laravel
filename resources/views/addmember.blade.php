<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.form{
  padding: 14px 20px;
 margin: 0px 0px;
 background-color: skyblue;
 text-align: center;
 border: 2px solid darkblue;
}

input{
  /*margin: 0 !important;*/
  width: 50%;
  padding: 8px 20px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: darkred;
  color: white;
}

h1{
  color:darkgoldenrod;
 }
   .lable{
    color: purple;
    cursor: pointer;
     }

</style>

<div class="container col-md-4  my-4 justify-content-center">
<h1>Add Member</h1>     
<form class="form" action="add" method="POST">
	@csrf
  <div class="form-group">
  <label class="lable" for="id">ID:</label><br>
	<input type="number" name="id" required>
  </div>
  <div class="form-group">
  <label class="lable" for="fname">First name:</label><br>
	<input type="text" name="firstname" placeholder="Enter your name" required>
  </div>
	<button type="submit" class="btn"> SUBMIT </button>
  <a class="btn btn-danger" href="/users">Show Data</a>

  <br><br>
</form>
</div>

    



