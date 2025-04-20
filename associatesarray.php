<!-- <!-- # get inputs from numbers -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Associates Array's</title>
        
    </head>

    <body>
        <form action="associatesarray.php" method="post">

          <input type="text" name="student">

          <input type="submit">
        </form>
        <?php
        // storing key and mapping to particular values e.g grade
           $grades = array("John"=> "A+", "Pam"=>"B-", "Oscar"=>"C+");
           echo $grades[$_POST["student"]];
        //    $grades["John"] = "F";
        //    echo $grades["John"];
        //    echo $grades["Oscar"];


        ?>

    </body>

</html>

<!-- not only stoe data values but we can even store key values pairs that allows me to access that information separately-->

<!-- let's say I wanna build school website and I would like to know students grades they got for the particular test that scenario we can use associate array -->