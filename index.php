<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
    <h1>Add a New User</h1>
    
    <input  id="name" type="text" placeholder="Inter Your Name.."> </br></br>
    <input  id="address" type="text" placeholder="Inter Your address.."> </br></br>
    <input  id="number" type="text" placeholder="Inter Your Number.."> </br></br>
    <input  id="email" type="email" placeholder="Inter Email ID.."> </br></br>
    <button class="btn">insert Data</button>
    <h1>Reading data Table</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Address</th>
            <th>Number</th>
            <th>Email</th>
    
            <tbody class="tbody">
                
            </tbody>
        </thead>
    </table>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>    
<script src="ajax.js"></script>
</body>
</html>