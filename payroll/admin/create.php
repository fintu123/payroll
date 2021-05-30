<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Add new employee</title>
  </head>
  <body class="container">
    <h1 class ="page_headeer ">Add a new employee</h1>
<form action="include/create1.php" method="post">
  <label>FIRST NAME</label><br>
  <input type="text"  name="fname"><br>
  <label>LAST NAME</label><br>
  <input type="text"  name="lname"><br>
  <label>E-MAIL ADDRESS</label><br>
  <input type="text" name="email"><br>
  <label>CONTACT</label><br>
  <input type="text" name="contact"><br>
  <label>GENDER</label><br>
  <input type="text"  name="gender"><br>
  <label>POSITION</label><br>
  <input type="text" name="position"><br>
  <input type="submit" name="submit" class="btn-login"/>
</form>
<p><a href="employeeinfo.php" class="btn btn-warning">Back to employee page</a></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>