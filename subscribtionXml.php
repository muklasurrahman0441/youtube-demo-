<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$a = $_GET["pic"];
//$b = $_GET["name"];




$sql = "INSERT INTO element (channel)
VALUES ('$b')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>successfull</h2>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>