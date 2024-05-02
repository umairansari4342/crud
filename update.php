<?php include ("connection.php"); 
 $id=$_GET['id'];
$select="SELECT * FROM form WHERE id='$id'";

$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<div class="container">
        <form action ="" method="POST">
     	<div class="title">
     		REGISTRATION FORM
     	</div>

     	<div class="form">
     		<div class="input_field">
     			<label>first name</label>
     			<input value="<?php echo $row['name'] ?>" type="text" class="input" name="name"   >
     		</div>
     		<div class="input_field">
     			<label>last name</label>
     			<input value="<?php echo $row['fname'] ?>"  type="text" class="input" name="fname" >
     		</div>
     		<div class="input_field">
     			<label>age</label>
     			<input value="<?php echo $row['age'] ?>" type="text" class="input" name="age">
     		</div>
     		<div class="input_field">
     			<label> password</label>
     			<input value="<?php echo $row['password'] ?>" type="password" class="input" name="password">
     		</div>
     		<div value="<?php echo $row['gender'] ?>" class="input_field">
     			<label >gender</label>
				<
     			<select  name= "gender">
     				<option>select</option>
     				<option>male</option>
     				<option>fe male</option>
     			</select>
     		</div>
			 <div class="input_field">
     			<label>email</label>
     			<input value="<?php echo $row['email'] ?>" type="text" class="input" name="email">
     		</div>
			 <div class="input_field">
     			<label>phone</label>
     			<input value="<?php echo $row['phone'] ?>" type="text" class="input" name="phone">
     		</div>
			 <div class="input_field">
     			<label>address</label>
     			<input value="<?php echo $row['address'] ?>" type="text" class="input" name="address">
     		</div>
            <div class ="input_field">
				<input type="submit" value="update" class="btn" name="update">
				<button><a href="view.php">back</button>
           </div>
		 
     	</div>
</form>

     </div>