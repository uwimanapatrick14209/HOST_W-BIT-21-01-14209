!-- <!-- # get inputs from numbers -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>If statement</title>
        
    </head>

    <body>

        <?php
        // isMale= false;
           $isMale = true;
           $isTall = false;
        //    you can use also or conditions = ||
           if ($isMale && $isTall){

            echo "You are tall male";

           } elseif ($isMale && !$isTall){

            echo "You are a short male";

           } elseif(!$isMale && $isTall){

            echo "You are a not male but are  tall";

           } else{
            echo "You are not male and not tall ";
           }


        ?>

    </body>

</html>


<!-- I wake up 
If I'm hungury 
    I eat breakfast
I look at my phone,
If it's about to die
    IU charge it

I leave my house
If it's cloudy.
    I bring an umbrella
Otherwise
    I bring sunglasses -->


<!-- It allow program to make decision -->
 <!-- if statement so different thing with different situation -->