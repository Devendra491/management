<?php
  $conn=mysqli_connect("localhost", "root", "", "h_m_s") or die("Failed To Connect");
  $i1=$_GET['v1'];
  $i2=$_GET['v2'];
  $sql="SELECT rollno,pass,fname,lname,mno,dept,y_of_s FROM signup_data";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
      if($row['rollno']==$i1 && $row['pass']==$i2 )
      {
        session_start();
        $_SESSION["rno"]=$i1;
        $_SESSION["fname"]=$row['fname'];
        $_SESSION["lname"]=$row['lname']; 
        $_SESSION["mno"]=$row['mno'];
        $_SESSION["dept"]=$row['dept'];
        $_SESSION["y_of_s"]=$row['y_of_s']; 
        $_SESSION["hostel1"]="savitribai phule hostel";
        $_SESSION["hostel2"]="chatrapati shivaji maharaj hostel";
        $_SESSION["hostel3"]="Mother teresa hostel";
        $_SESSION["hostel4"]="shahu maharaj hostel";
        header("location:home.php");
      }
      
  }

  echo "Invalid ID and Password";
 
  ?>