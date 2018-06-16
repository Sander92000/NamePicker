<!DOCTYPE HTML>

<html>

<head>
    <meta charset="UTF-8">
    <title>Random Name Picker</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <h1>Random name picker</h1>
        </header>
        <hr>
        <div id="content">
            <?php
                include 'php/connect.php';

                $sql = "SELECT Name FROM Names;";

                $result = mysqli_query($dbcon, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)){
                        echo $row['Name'] . "<br>";
                    }
                }else{
                    echo 'No data found...';
                }
            ?>
            <div id="controls">
                <input type="radio" id="male" name="male" value="Male" checked> Male
                <input type="radio" id="female" name="female" value="Female"> Female<br>
                <button id="randomNumber" onclick="newName()">Give me a random name</button>
            </div>
        </div>
        <footer>
            <p>Website designed for fun!</p>
        </footer>
    </div>
</body>

<script src="js/main.js"></script>

</html>