<?php 
    $servername="localhost";
        $username="root";
        $password="";
        $database="webEngineering";
        $conn=mysqli_connect($servername,$username,$password,$database);
        $UID=$_GET['id'];
        $sql="DELETE FROM StudentsData WHERE id= {$UID}";
       mysqli_query($conn,$sql);
       header("location:http://localhost/WEPROJECT/index.php");?>