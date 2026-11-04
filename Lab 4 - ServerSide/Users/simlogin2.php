<?php
// Example 2: piggy-backed query using mysqli_multi_query.
// Adapted to the Docker MySQL container: host "db", user "Jess", password "admin".
$conn = mysqli_connect("db", "Jess", "admin", "my_db");

$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$sql = "SELECT * FROM persons WHERE username = '$myusername' and Password = '$mypassword'";

echo $sql . "<br><br>";
$result = mysqli_multi_query($conn, $sql);
if ($result) {
    echo "DONE";
} else {
    echo "NOT Done";
}
?>