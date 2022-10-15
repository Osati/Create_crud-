<?Php
    $conn=mysqli_connect("localhost","root","","ajx");
    $id=$_GET['userid'];
    $select ="SELECT * FROM ajax WHERE id=$id";
    $exit=mysqli_query($conn,$select);
    
    $row = mysqli_fetch_array($exit);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>
<body>
<div class="container">
    <h1>User Data edit</h1>
    
    <input  id="name" type="text" value="<?php echo $row['name']?>" placeholder="Inter Your Name.."> </br></br>
    <input  id="address" type="text" value="<?php echo $row['address']?>" placeholder="Inter Your address.."> </br></br>
    <input  id="number" type="text" value="<?php echo $row['number']?>" placeholder="Inter Your Number.."> </br></br>
    <input  id="email" type="email" value="<?php echo $row['email']?>" placeholder="Inter Email ID.."> </br></br>
    <button class="edit" onclick="UPDATE_DATA(<?php echo $row['id'] ?>)">edit data</button>
    <button class="edit" onclick="home()">Home Page</button>
</div>
</body>
</html>