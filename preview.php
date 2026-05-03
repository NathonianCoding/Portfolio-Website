<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/reset.css">
    <link rel="stylesheet" href="styling/blog.css">
    <link rel="stylesheet" href="styling/mobile_blog.css" media="screen and (max-width:768px)">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Play:wght@400;700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Preview</title>
</head>
<body>
    <div id="pageGrid">
        <?php
        session_start();
        if (sizeOf($_SESSION) == 0){
            $header = "<header>
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
            </header>";

        }
        else{
            $header = "<header>
                <p id='loggedInMessage'>Welcome Nathan</p>
                <nav role = 'navigation'>
                    <a href='index.php'><h1 id='myname'>Nathan Berhane</h1></a>
                    <ul class = 'topbar'>
                        <a class = 'link' href='education.php'><li>Education</li></a>
                        <a class = 'link' href='portfolio.php'><li>Portfolio</li></a>
                        <a class = 'link' href='skills.php'><li>Skills</li></a>
                        <a class = 'link' href='logout.php'><li>Logout</li></a>
                        <a class = 'link' href='addEntry.php'><li>Post</li></a>
                        <a class = 'link' href = 'viewBlog.php'><li>Blog</li></a>
                    </ul>
                </nav>
            </header>";

        }
        echo $header;
        ?>

        <h1 id="title">Blog Preview</h1>
        <section id='blogs'>
        
        <div>
        <a href="addEntry.php" class = "button">Return</a>
        <a href="uploadBlog.php" class = "button">Post</a>
        </div>
        <?php
        $_SESSION['blogTitle'] = $_POST['blogTitle'];
        $_SESSION['blogText'] = $_POST['blogText'];
        date_default_timezone_set('Europe/London');
        if (sizeOf($_POST)>0){
            $output = sprintf("
            <article class= 'blogEntry'>
            <div class='headline'>
            <h1 class='blogTitle'>%s</h1>
            <i>%s</i>
            </div>
            <p>%s</p>
            </article>", $_POST['blogTitle'], date("d/m/Y H:i"), $_POST['blogText']);
            echo $output;
            
        }
        // prints the rest of the blogs below 
        foreach($_SESSION['ordered_blog_list'] as $key => $value){
            $blog = sprintf("<article class = 'blogEntry'>
                <div class = 'headline'>
                <h1 class = 'blogTitle'>%s</h1>
                <i>%s</i>
                </div>
                <p>%s</p>
                </article>", $value['title'], $value['dateTime'], $value['entry']);
            
                echo $blog;
            }

        
        
        ?>
        </section>
        <footer>
            <hr>
            <p class = "Copyright">&copy; 2026 Nathan Berhane. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>