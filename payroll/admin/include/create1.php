<?php
include 'dbh.php';
if(isset($_POST['submit']))
{
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    
 $query="INSERT INTO addemp(fname,lname,email,contact,gender,position) values('$fname','$lname','$email','$contact','$gender','$position')";
    
     $statement = $conn->prepare($query);
      //execute the query
 if($statement->execute())
 {
 echo "<div class='alert alert-success'>A new employee is added successfully</div>";
 }


}

?>


