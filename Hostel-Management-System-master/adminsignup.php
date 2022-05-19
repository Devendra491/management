<?php
  $conn=mysqli_connect("localhost", "root", "", "h_m_s") or die("Failed To Connect");
  $i1=$_GET['v1'];
  $i2=$_GET['v2'];
  $sql="SELECT username,password FROM  admin_data";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
      if($row['username']==$i1 && $row['password']==$i2 )
      {
          header("location:http://localhost/phpd/Hostel-Management-System-master/admin/admin_home.php");
      }
      
  }
  echo "Invalid ID and Password";
  ?>