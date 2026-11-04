<?php
// Example 3: UNION query. Uses mysqli_multi_query like Example 2.
// Adapted to the Docker MySQL container: host "db", user "Jess", password "admin".
mysqli_report(MYSQLI_REPORT_OFF); // Let the script drain results without throwing fatal exceptions.
$conn = mysqli_connect("db", "Jess", "admin", "my_db");

$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$sql = "SELECT * FROM persons WHERE username = '$myusername' and Password = '$mypassword'";

echo $sql . "<br><br>";
if (mysqli_multi_query($conn, $sql)) {
    echo "<br>DONE<br>";
    // Drain remaining result sets from the multi-query so the connection isn't stuck.
    while (mysqli_more_results($conn)) {
        if ($res = mysqli_store_result($conn)) {
            while ($row = mysqli_fetch_row($res)) {
                echo "Name: " . $row[0] . " | Email: " . $row[3] . "<br>";
            }
            mysqli_free_result($res);
        }
        mysqli_next_result($conn);
    }
}
?>