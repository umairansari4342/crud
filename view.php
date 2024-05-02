<?php include ("connection.php"); ?>
<a href="form.php">home</a>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>name</th>
        <th>fname</th>
        <th>age</th>
        <th>password</th>
        <th>gender</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        <th colspan="2">action</th>
    </tr>
        <?php
            $query= "SELECT * FROM form";
            $data=mysqli_query($conn,$query);
            $result=mysqli_num_rows($data);
            if($result){
               while ($row=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $row['name'];?> </td>
                    <td><?php echo $row['fname'];?> </td>
                    <td><?php echo $row['age'];?> </td>
                    <td><?php echo $row['password'];?> </td>
                    <td><?php echo $row['gender'];?> </td>
                    <td><?php echo $row['email'];?> </td>
                    <td><?php echo $row['phone'];?> </td>
                    <td><?php echo $row['address'];?> </td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>"> edit</td>
               </tr>
                <?php

               }
            }
            else{
                ?>
                <tr>
                    <td>not record found<?td>
            </tr>
            <?php
            }
         ?>
       
</table>