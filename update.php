<?php
    $conn=mysqli_connect("localhost","root","","ajx");


        $name = $_GET['name'];
        $address = $_GET['address'];
        $number = $_GET['number'];
        $email = $_GET['email'];
        $id = $_GET['userid'];

        $update= "UPDATE ajax SET name='$name',address='$address',number='$number',email='$email' WHERE id=$id";
        $exit=mysqli_query($conn,$update);
        
        if($exit){
            echo "Data Update success";
        }else{
            echo "Data Update fail";
        }
?>