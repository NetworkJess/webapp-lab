<?php
// Example 1: single query (insecure).
// Adapted to the Docker MySQL container: host "db", user "Jess", password "admin".
$conn = mysqli_connect("db", "Jess", "admin", "my_db");

$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$sql = "SELECT * FROM persons WHERE username = '$myusername' and Password = '$mypassword'";

echo $sql . "<br><br>";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_row($result)) {
        echo "Valid User <br>";
        echo "Name:" . $row[0] . "<br> Email:  " . $row[3];
    }
} else {
    echo "Invalid user id or password";
}
?>