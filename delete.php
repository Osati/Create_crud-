<?php

$conn=mysqli_connect("localhost","root","","ajx");

  $userid = $_POST['userid'];

  $delete ="DELETE FROM ajax WHERE id=$userid";

  $query =mysqli_query($conn,$delete);
   
   if($query){
     
      echo "delete confrim";
   }else{
      echo "failed";
   }


?>