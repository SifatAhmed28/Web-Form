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

