<!-- <!-- # get inputs from numbers -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>URL's Parameters</title>
        
    </head>

    <body>

        
        <form action="urlparameters.php" method="get"> 
            Name: <input type="text" name="age"> 
 
            <input type="submit">

        </form>

        <?php
           echo $_GET["age"]; 
        //    basically printint the name
        // store information  inside the url insteady ofhaving users typing info
        ?>


    </body>

</html>