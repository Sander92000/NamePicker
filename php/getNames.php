<?php

include_once ('php/connect.php');

$sql = "SELECT Name FROM Names";

$result = mysqli_query($dbcon, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
    echo $row;
} else {
    echo 'No data found...';
}

?>