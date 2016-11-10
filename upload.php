<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-10 col-xs-310"></div>
			<div class="col-md-8 col-sm-10 col-xs-10">
				<h2>Upload Form</h2>
				<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
					<div class="form-group row">
						<label for="example-first-input" class="col-xs-2 col-form-label">First Name:</label>
						<div class="col-xs-10">
							<input class="form-control" type="text" placeholder="First Name" id="firstname">
							<br>
					</div>
					</div>
					<div class="form-group row">
						<label for="example-last-input" class="col-xs-2 col-form-label">Last Name:</label>
						<div class="col-xs-10">
							<input class="form-control" type="text" placeholder="Last Name" id="lastname">
							<br>
					</div>
					</div>
					<div class="form-group row">
  						<label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
 						<div class="col-xs-10">
							 <input class="form-control" type="date" value="2016-01-01" id="example-date-input">
							 <br>
 					 </div>	
 					 </div>
 					 <div class="form-group row">
						<label for="example-user-input" class="col-xs-2 col-form-label">User Type:</label>
 					 		<input type="radio" name="user" value="student">Student
							<input type="radio" name="user" value="researcher">Researcher
 					 		<input type="radio" name="user" value="Data Scientist">Data Scientist<br>
					</div>
					<div class="row form-group">
							<a href="index.html" class=" btn btn-info" type="submit" name="login" value="login">Submit</a>
					</div>
				</form>
		</div>
			</div>
</div>
		</div>
</div>	</div> </div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
