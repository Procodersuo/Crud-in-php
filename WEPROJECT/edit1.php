    <?php 
    $servername="localhost";
        $username="root";
        $password="";
        $database="webEngineering";
        $conn=mysqli_connect($servername,$username,$password,$database);
        $UID=$_POST['uid'];
        $unmae=$_POST['uname'];
        $uemail=$_POST['uemail'];
        $uadrs=$_POST['uadrs'];
        $sql="UPDATE `StudentsData` SET `Name`  ='$unmae',`email` ='$uemail', `message` ='$uadrs' where `id`='$UID' " ;
       mysqli_query($conn,$sql);
       header("location:http://localhost/DBMSPROJECT/index.php");?>
      

  

=