<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $descr=$_POST['descr'];

    $con=mysqli_connect('localhost','root',"",'data_table');

    $sql="INSERT INTO Info(name,age,gender,email,phone,descr) 
    VALUES('$name','$age','$gender','$email','$phone','$descr')";


if(mysqli_query($con,$sql))
{
    echo "<script>alert('new record inserted')</script>";
}
else{
    echo "error..";
}
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    
    <div class="con">
        <h1>welcome to RCPIMRD B ombay trip form..</h1>
        <p>fill this form to conferm ur participation...</p>
        <p class="smsg">thanks for submiting form..</p>

        <form action="#" method="POST">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone no">
            <textarea name="descr" id="descr" cols="30" row="20" placeholder="enter other info here"></textarea><br>
            <button class="btn" name="submit">submit</button>
        </form>

    </div>
    

</body>

</html>
