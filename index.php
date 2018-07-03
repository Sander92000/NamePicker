<!DOCTYPE HTML>

<html>

<head>
    <meta charset="UTF-8">
    <title>Random Name Picker</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">

    <?php
        function loadNames(){
            /*
            *This function loads all names in the database into an array
            */
            $i = 0;
            $names = array();
            
            include 'php/connect.php';
            
            $sql = "SELECT * FROM Names;";
            
            $result = mysqli_query($dbcon, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if ($resultCheck > 0){                
                while ($row = mysqli_fetch_array($result)){
                    $names[$i] = $row['Name'];
                    $i += 1;
                }
            }else{
                echo 'No data found...';
            }
            return $names;
        }
    ?>
</head>

<body>
    <div class="container">
        <header>
            <h1>Random name picker</h1>
        </header>
        <hr>
        <div id="content">
            <div id="name-suggestion">
                <?php
                    include 'php/getRandomName.php';

                    $test = pickRandomName();
                    echo $test;
                ?>
            </div>
            <div id="ranking">
                <h2>TOP RANKING NAMES</h2>
                <?php
                    include 'php/top.php';
                ?>
            </div>
        </div>
        <div id="controls">
            <form method="POST" action="php/vote.php">
                <input type="radio" id="male" name="male" value="Male" checked> Male
                <input type="radio" id="female" name="female" value="Female"> Female<br>
                <button id="like" name="like">Like (+1)</button>
                <button id="dislike" name="dislike">Dislike (-1)</button>
            </form>
        </div>
        <hr>
        <footer>
            <p>Website designed for fun!</p>
        </footer>
    </div>
</body>

<script src="js/main.js"></script>

</html>