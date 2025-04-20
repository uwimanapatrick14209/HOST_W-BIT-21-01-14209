<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>URL's Parameters</title>
    </head>

    <body>
        <h2>Login Form</h2>
        
        <form action="postvsget.php" method="get"> 
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>

            <input type="submit" value="Login">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h3>Received POST Data:</h3>";
                echo "Username: " . htmlspecialchars($_GET["username"]) . "<br>";
                echo "Password: " . htmlspecialchars($_GET["password"]);
            }

            // Explanation:
            // GET method appends user input to the URL, making it visible and insecure for sensitive data like passwords.
            // POST method sends data in the HTTP request body, which is more secure.
        ?>
    </body>
</html>
