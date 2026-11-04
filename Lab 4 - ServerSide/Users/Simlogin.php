<?php
$conn = mysqli_connect ("localhost","root","","my_db");

      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];

      $sql = "SELECT * FROM persons WHERE username = '$myusername' and Password = '$mypassword'";

   echo $sql."<br><br>";
      $result = mysqli_query($conn,$sql);

      if(mySQLi_num_rows($result)>0) {

       while ($row=mySQLi_fetch_row($result)){
        echo "Valid User <br>";
    echo "Name:". $row[0]. "<br> Email:  ".$row[3];
      }
      }
  else echo "Invalid user id or password";


?>
