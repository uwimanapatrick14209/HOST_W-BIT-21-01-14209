<!-- get inputs from the user -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Input</title>

</head>

    <body>

    <form action="userinputs.php" method="get">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit">
    </form>

    <br>
    your name is <?php echo $_GET["name"] ?>
    <br>
    your Age is <?php echo $_GET["age"] ?>
    </body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Input</title>
</head>
<body>

    <form action="userinputs.php" method="get">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit">
    </form>

    <br>

    your name is <?php echo isset($_GET["name"]) ? $_GET["name"] : ""; ?>
    <br>
    your Age is <?php echo isset($_GET["age"]) ? $_GET["age"] : ""; ?>

</body>
</html> -->

