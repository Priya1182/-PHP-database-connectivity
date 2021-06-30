
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123456";
    $conn=mysqli_connect($servername,$username,$password,$database_name);
    if(!$conn)
    {
        die("Connection Failed :".mysqli_connect_error());
    }
 
    if(isset($_POST['save']))
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $reason=$_POST['reason'];
    $symptoms=$_POST['symptoms'];
    }
$sql_query="INSERT INTO entry (Name,E_mail,Gender,Mobile_No,Reason,Symptoms)VALUES('$name',' $email',' $gender','$mobile','$reason',' $symptoms')";
    if(mysqli_query($conn,$sql_query))
        {
            echo"New Details Entry iserted successfully !";
        }
    else
        {
          echo " Error: ".$sql. " ".mysqli_error($conn);
        }
    mysqli_close($conn);



   
?>
   
Zoomed out of item. 