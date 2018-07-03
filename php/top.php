<?php

include ('connect.php');

$sql = "SELECT Name, Vote_For, Vote_Against 
        FROM Names 
        ORDER BY Vote_For DESC 
        LIMIT 5 ;";

$top = mysqli_query($dbcon, $sql);
$checkResult = mysqli_num_rows($top);

if (0 < $checkResult){
    echo '<table>';
    echo '<th>#</th>';
    echo '<th>Name</th>';
    echo '<th>Votes For</th>';
    echo '<th>Votes Against</th>';
    for ($i=1; $i<=$checkResult; $i++){
        $row = mysqli_fetch_assoc($top);
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        echo '<td>' . $row['Name'] . '</td>';
        echo '<td>' . $row['Vote_For'] . '</td>';
        echo '<td>' . $row['Vote_Against'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}else{
    echo 'No data found...';
}

?>