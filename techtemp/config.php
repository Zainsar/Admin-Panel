<?php
$conn = mysqli_connect("localhost", "root", "", "tech");
if (!$conn) {
    die("Connection Error");
}
else{
    echo "Connected";
}
?>