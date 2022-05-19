<?php
  $conn=mysqli_connect("localhost", "root", "", "h_m_s") or die("Failed To Connect");
  $i1=$_GET['v1'];
  $i2=$_GET['v2'];
  $i3=$_GET['v3'];
  $i4=$_GET['v4'];
  $i5=$_GET['v5'];
  $i6=$_GET['v6'];
  $i7=$_GET['v7'];
  //$i8=$_GET['v8'];
  $sql="INSERT INTO hostel2_db values('$i1','$i2','$i3','$i4','$i5','$i6','$i7')";
  mysqli_query($conn,$sql);
  echo '<script>alert("Apply Successfully")</script>';
  header("location: home.php");
?>