<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Construtors</title>
        
    </head>

    <body>

       
        <?php
           class Book{
              var $title;
              var $author;
              var $pages;

              function __construct($name) {
                // echo "New Book Created <br>";
                  echo $name;
               }
            }


            $book1 = new Book("Junior");
            $book1->title = "Harry Potter";
            $book1->author = "JK Rowling";
            $book1->pages = 100 ; 
            

            $book2 = new Book("Tom");
            $book2->title = "Lord of the Rings ";
            $book2->author = "Tolkien";
            $book2->pages = 200;
        ?>

    </body>

</html>
<!-- constructors is a function that's going to get called whenever we create an object of the class. -->
/* we use constructors to create object in the php */ -->