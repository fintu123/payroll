
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: rounded;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
}
.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>


<button class="button button1"><a href="create.php">ADD NEW EMPLOYEE<a></button>
<br><br>
    
<?php
      // databaae connection
      include 'include/dbh.php';


      //select records from database
      $query="select fname,lname,email,contact,gender,position from addemp";
      $statement= $conn-> query($query);


    //if there is more than one row in db display it
    if($statement-> num_rows > 0)
    {

      //loop through table to retrieve each record and display in bootstrap grid
      while($row = $statement-> fetch_assoc())
      {     
        echo"
        <table>
 <table>
  <tr>

    <th>FIRST NAME</th>
    <th>LAST NAME</th>
    <th>CONTACT</th>
    <th>EMAIL</th>
    <th>GENDER</th>
    <th>POSITION</th>
  </tr>
  <tr>

    <td>" . $row["fname"] ."</td>
    <td>" . $row["lname"] ."</td>
    <td>" . $row["email"] ."</td>
    <td>" . $row["contact"] ."</td>
    <td>" . $row["gender"] ."</td>
    <td>" . $row["position"] ."</td>
  </tr>
 </table>
        ";
        
        
      }
    }
    else
    {
       echo "<div class='alert alert-danger'>No records found</div>";
    }


?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</body>
</html>