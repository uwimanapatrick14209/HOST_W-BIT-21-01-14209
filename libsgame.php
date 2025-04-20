<!-- # get inputs from numbers
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Libs Game</title>
        
    </head>

    <body>

        
        <form action="libsgame.php" method="get"> 
            Color: <input type="text" name="color"> <br>
            Plural Noun: <input type="text" name="PluralNoun"> <br>
            Celebrity: <input type="text" name="celebrity"><br>
            
            <input type="submit">

        </form>
        <br></br>

        <?php
           $color = $_GET["color"];
           $PluralNoun = $_GET["PluralNoun"];
           $celebrity = $_GET["celebrity"];
        //    echo "Roses are blue<br>";
        //    echo "Violets are blue<br>";
        //    echo "I love you <br>";
            // echo "Roses are {color} <br>";
            // echo "{pluralNoun} are blue <br>";
            // echo "I love {celebrity} <br>" ;

            echo "Roses are $color <br>";
            echo "$PluralNoun are blue <br>";
            echo "I love $celebrity <br>" ;
        ?>
    </body>

</html> -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Libs Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f3ff;
            border-left: 4px solid #2196f3;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Funny Libs Game</h2>
        <form action="libsgame.php" method="get">
            <label for="color">Color:</label>
            <input type="text" name="color" id="color">

            <label for="PluralNoun">Plural Noun:</label>
            <input type="text" name="PluralNoun" id="PluralNoun">

            <label for="celebrity">Celebrity:</label>
            <input type="text" name="celebrity" id="celebrity">

            <input type="submit" value="Make Poem">
        </form>

        <?php
        if (isset($_GET["color"]) && isset($_GET["PluralNoun"]) && isset($_GET["celebrity"])) {
            $color = $_GET["color"];
            $PluralNoun = $_GET["PluralNoun"];
            $celebrity = $_GET["celebrity"];

            echo "<div class='result'>";
            echo "Roses are $color<br>";
            echo "$PluralNoun are fantastic<br>";
            echo "I love $celebrity<br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>


<!-- how to run php file in browser = http://localhost:4000/php starter/calculator.php -->