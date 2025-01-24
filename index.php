<?php 
$insert=false;
if(isset ($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username, $password);
if(!$con){
    die("connection to this database failed due to ".
    mysqli_connect_error());
}
//echo "succesfully connected to the database." ;
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];;
$sql= "INSERT INTO `nsu_box`.`nsubox` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `bt`) 
VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
if($con->query($sql)==true){
     $insert=true;
    
}
else {
    echo "ERROR :$sql <br> $con->error()";
}
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Nsuer's!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="nsu.jpg" alt="North South University">
  <div class="container">
    <h1 >NSU Student Complaint Submission. </h1>
       <h3> Your Voice Matters: Let Us Know Your Concerns</h3>
       <?php
       if($insert==true){
        echo "<p class='submit' style='color: green;'>Thank you for sharing your valuable feedback! Your input is essential in helping us improve and enhance the services offered by our university. We truly appreciate your time and effort in supporting our growth.</p>";
}?>
        <form action="index.php" method="post">
     <input type="text" name="name" id="name" placeholder="Enter Your Name">       
     <input type="number" name="age" id="age" placeholder="Enter Your Age">  
     <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
     <input type="email" name="email" id="email" placeholder="Enter Your Email">
     <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Other Information"></textarea>
        <button class="btn">Submit</button>
            

    </form>
    </div>  

  <script src="index.js"></script>


  
</body>
</html>