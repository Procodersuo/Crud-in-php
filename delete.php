<!doctype html>
<html lang="en">
  <head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student record form</title>
  </head>
  <style>
    *{
        box-sizing: border-box;
        list-style: none;
    }
    body{
        margin: 0px;}
    header{
        padding: 50px;
        text-align: center;
        background-color: grey;
        color: white;} 
  </style>
  <body>
  <header>
    <h1 class="heading">WEB Engineering</h1></header>
    <h1 style="text-align: center; color:white;background-color:black; height:60px;font-size: 50px;margin-top:0px;"><i>DATA DELETE FORM</i></h1>
    <!-- As a link -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Student Form</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit.php">Edit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="delete.php">Delete</a>
      </li>
    </ul>
  </div>
</nav>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {$servername="localhost";
        $username="root";
        $password="";
        $database="webEngineering";
        $conn=mysqli_connect($servername,$username,$password,$database);
        $name=$_POST['name'];
        $sql="DELETE FROM StudentsData WHERE id= {$name}";
       $result=mysqli_query($conn,$sql);
    if($result)
        {?>
           <div class="alert alert-success" role="alert">
          your data delete sucessfully
          <?php 
          header("location:http://localhost/DBMSPROJECT/index.php");         ?>
          
        </div>
        <?php 
        }}?>
<div class="container">
    <form action="delete.php" method="POST">
  <div class="form-group">
    <label for="nmae">Enter id of student</label>
    <input type="text" class="form-control" id="name" aria-describedby="text" placeholder="Enter id" name="name">
    <small id="texthelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
  </div>  
  <button type="submit" class="btn btn-primary">Delete</button>
</form>  

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>