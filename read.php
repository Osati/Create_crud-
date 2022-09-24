<?php
// reading data section starts here

$conn=mysqli_connect("localhost","root","","ajx");

$select="SELECT * FROM ajax";

$exit =mysqli_query($conn,$select);

WHILE($row = mysqli_fetch_array($exit)){?>
   
   <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['number']; ?></td>
    <td><?php echo $row['email']; ?></td>
   </tr>
<?php }

?>