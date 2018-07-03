<?php

    $nameID = 1;

    if (isset($_POST['like'])){ // Liked the name
        $sql = "UPDATE Names SET Vote_For = Vote_For + 1 WHERE NameID = " . $nameID;
        processVote($sql);
    }
    else{ // Disliked the name
        $sql = "UPDATE Names SET Vote_Against = Vote_against + 1 WHERE NameID = " . $nameID;
        processVote($sql);
    }

    function processVote($sql){
        //Include connection
        include_once 'connect.php';

        $vote = mysqli_query($dbcon, $sql);
        echo 'Your vote has been recorded';
    }

?>