<!-- <!-- # get inputs from numbers -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Array's</title>
        
    </head>

    <body>
        <form action="checkbox.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            


            <input type="submit">
        </form>
        <?php
        //    this is an array hold all fruits from checked 
           $fruits = $_POST["fruits"] ;
           echo $fruits[2];


        


        ?>

    </body>

</html>

<!-- #getting inputs from text boxes and how we can use arrays in the real world -->
