<!-- compare one value to the bunch of other values -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Switch statement</title>
        
    </head>

    <body>

        
        <form action="switch.php" method="post"> 
                    What was your grade?<br>
            Grade: <input type="text" name="grade"> <br>
            
            <input type="submit">

        </form>
        <br></br>

        <?php
           $grade = $_POST["grade"];
           echo $grade;
           switch($grade){
            case "A":
                echo "You did amazing !";
                break;
            case "B":
                echo "You did pretty good !";
                break;
            default:
                echo "Invalid Grade !";
           }

        ?>

        </body>
</html>
<!-- Please do the rest case up to F and handle if you type invalid Grade -->
<!-- break actually breaks program structure -->