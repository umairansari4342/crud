<?php include ("connection.php"); ?>
<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
     <div class="container">
        <form action ="" method="POST">
     	<div class="title">
     		REGISTRATION FORM
     	</div>

     	<div class="form">
     		<div class="input_field">
     			<label>first name</label>
     			<input type="text" class="input" name="name">
     		</div>
     		<div class="input_field">
     			<label>last name</label>
     			<input type="text" class="input" name="fname">
     		</div>
     		<div class="input_field">
     			<label>age</label>
     			<input type="text" class="input" name="age">
     		</div>
     		<div class="input_field">
     			<label> password</label>
     			<input type="password" class="input" name="password">
     		</div>
     		<div class="input_field">
     			<label>gender</label>
				<
     			<select name= "gender">
     				<option>select</option>
     				<option>male</option>
     				<option>fe male</option>
     			</select>
     		</div>
			 <div class="input_field">
     			<label>email</label>
     			<input type="text" class="input" name="email">
     		</div>
			 <div class="input_field">
     			<label>phone</label>
     			<input type="text" class="input" name="phone">
     		</div>
			 <div class="input_field">
     			<label>address</label>
     			<input type="text" class="input" name="address">
     		</div>
            <div class ="input_field">
				<input type="submit" value="register" class="btn" name="register">
				<button><a href="view.php">view</button>
           </div>
		 
     	</div>
</form>

     </div>
</body>
</html>
<?php
   if(isset($_POST['register']))
   {
	$name     =$_POST['name'];
	$fname     =$_POST['fname'];
	$age       =$_POST['age'];
	$password  =$_POST['password'];
	$gender    =$_POST['gender'];
	$email     =$_POST['email'];
	$phone     =$_POST['phone'];
	$address   =$_POST['address'];

	$query = "INSERT INTO form (name,fname,age,password,gender,email,phone,address) VALUES('$name','$fname ','$age','$password','$gender','$email ','$phone','$address  ')";
	
	$data = mysqli_query($conn,$query);
	if($data)
	{
		?>
		<script type ="text/javascript">
			alert("data is insert");
			</script>
		<?php
		

	}
	else 
	{
		
		?>
		<script type ="text/javascript">
			alert("data is not insert");
			</script>
		<?php
		

	}

	
	
   }
?>