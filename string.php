<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>

        </title>
    </head>
    <body>
        <?php
          $phrase = "University of Academy";
          echo strtolower($phrase); #convert it into lowercase
          echo strlen($phrase); #length of phrase
          echo $phrase[0]; #print character index in the phrase
          $phrase [0] = "T";
          echo $phrase;
          echo str_replace("University", "Kigali", $phrase); #this allow us to replace character
          echo substr ($phrase, 16, 3); 
        ?>
    </body>
</html>
<!-- #to run/start surver : php -S localhost:4000 -->