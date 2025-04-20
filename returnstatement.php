

<!-- <!-- # get inputs from numbers -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Return Functions statement: </title>
        
    </head>

    <body>

        <?php
        #basically this function its goinna take $num and cubing it
           function cube($num){

            return $num * $num * $num;

           }

           $cubeResult = cube(10);
           echo $cubeResult;


        ?>

    </body>

</html>



<!-- 
wherever you put the return function thats means its the last line of php code even if you write something else Php will never touch it since there is return function
how we use return in the php functions
how we can give functions information in the form of parameters . I could actually give a function a couple of different pieces of information, and the function 
so return statement it's just to give information to function but also give us information back to us like  -->