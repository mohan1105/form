<?php 
 $conn= new mysqli('localhost','root','','register');
 $fname= $_POST['fname']; 
 $lname= $_POST['lname']; 
 $saddress= $_POST['saddress']; 
 $gender= $_POST['gender']; 
 $dob=$_POST['dob'];
 $email= $_POST['email']; 
 $mobile= $_POST['mobile']; 
 $course= $_POST['course']; 

 $sql = "INSERT INTO form(fname,lname,saddress,gender,dob,email,mobile,course) VALUES('$fname','$lname','$saddress','$gender','$dob','$email','$mobile','$course')";
 $query= mysqli_query($conn,$sql);
 if($query){
    echo "<center> <p> REGISTRATION SUCESSFULLY</p></center>";
    echo "<center> <button><a href='index.html'>GO TO HOME</a></button></center>";
 }    
 ?>