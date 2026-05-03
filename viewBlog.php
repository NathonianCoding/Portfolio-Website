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
    <title>Blog</title>
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
        
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "website_portfolio";
            // Creates connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT title, entry, dateTime FROM blogs";
            $res = $conn->query($sql);

            $record = $res->fetch_assoc();

            $list_of_blogs = [];
            // appends all blogs from db to $list_of_blogs
            while ($record){
                array_push($list_of_blogs, $record);
                $record = $res->fetch_assoc();   
            }
            // sorts array in descending order of dateTime of post
            $swap = true;
            $offset = 0;
            while ($swap == true) {
                $swap = false;
                for ($index = 0; $index < array_key_last($list_of_blogs) - $offset; $index++) {
                    $curr = DateTimeImmutable::createFromFormat('d/m/Y H:i', $list_of_blogs[$index]['dateTime'])->getTimestamp();
                    $next = DateTimeImmutable::createFromFormat('d/m/Y H:i', $list_of_blogs[$index + 1]['dateTime'])->getTimestamp();

                    if ($curr < $next) {
                        $swap = true;
                        [$list_of_blogs[$index], $list_of_blogs[$index + 1]] = [$list_of_blogs[$index + 1], $list_of_blogs[$index]];
                    }
                }

                $offset++;
            }
            $_SESSION['ordered_blog_list'] = $list_of_blogs;
           
        ?>
        <h1 id="title">My Blog</h1>

        <section id= "blogs">
            <?php
                // displays blogs in correct order
                foreach($list_of_blogs as $key => $value){
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