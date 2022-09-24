<?php

    $conn=mysqli_connect("localhost","root","","ajx");
    $name = $_POST['name'];
    $addeess = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];

    $insert= "INSERT INTO ajax(name,address,number,email)
     VALUES('$name','$addeess','$number','$email')"; 

    $query=mysqli_query($conn,$insert);

    if($query){
        echo "data insert success";
    }else{
        echo "data insert failed";
    }

?>
