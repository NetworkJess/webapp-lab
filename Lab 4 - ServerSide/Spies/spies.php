<?php 
  $fname = $_GET['fname'];
  $sname = $_GET['sname'];
?>

<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8" />
        <title>Spies</title>
  </head>
  <body>
        <p>
		<?php
            echo ("Your spy name is:" . $sname.",  ". $fname." ". $sname. ".") ;
		?>
        </p>
  </body>
</html>