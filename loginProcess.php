<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/reset.css">
    <link rel="stylesheet" href="styling/login.css">
    <link rel="stylesheet" href="styling/mobile_login.css" media = "screen and (max-width:768px)">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src = "js/refreshCachedPage.js" defer></script>
    <title>Login process</title>
</head>
<body>
    <?php
        session_start();
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "website_portfolio";
        // Creates connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT email, password FROM admin";
        $res = $conn->query($sql);

        $record = $res->fetch_assoc();    
    
        if (($record['email'] == $_POST['email']) and ($record['password'] == $_POST['password'])){
            $_SESSION['loggedIn'] = true;
            header("Location: addEntry.php");
        }
        else{
    ?>
    <div id="pageGrid">
        <header>
            <nav role = 'navigation'>
                <a href='index.php'><h1 id='myname'>Nathan Berhane</h1></a>
                <ul class = 'topbar'>
                    <a class = 'link' href='education.php'><li>Education</li></a>
                    <a class = 'link' href='portfolio.php'><li>Portfolio</li></a>
                    <a class = 'link' href='skills.php'><li>Skills</li></a>
                    <a class = 'link' href='login.php'><li>Login</li></a>
                    <a class = 'link' href = 'viewBlog.php'><li>Blog</li></a>
                </ul>
            </nav>
        </header>

      <h1 id = "title">Login</h1>

        <section id="loginForm">
            

            <form action="loginProcess.php" method="POST">
                <fieldset>
                    <legend>Login</legend>
                
                    <label for="email"></label><br>
                    <input type="email" id="email" placeholder="Email" name="email"><br>

                    <label for="password"></label><br>
                    <input type="password" id="password" placeholder="Password" name="password"><br>

                    <p class="error">username or password is incorrect</p>
                    <input type="submit" value = "Login" id = "loginButton">
                    
                </fieldset>

            </form>
        </section>
        
        <footer>
            <hr>
            <p class = "Copyright">&copy; 2026 Nathan Berhane. All rights reserved.</p>
        </footer>  


    </div>
    <?php
        }
    ?>
</body>
</html>