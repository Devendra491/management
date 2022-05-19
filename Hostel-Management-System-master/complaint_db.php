<?php
  $conn=mysqli_connect("localhost", "root", "", "h_m_s") or die("Failed To Connect");
  $i1=$_GET['hostel_name'];
  $i2=$_GET['rollno'];
  $i3=$_GET['message'];
  $sql="INSERT INTO complaint_db values('$i1','$i2','$i3')";
  mysqli_query($conn,$sql);
    header("location: home.php");
?>