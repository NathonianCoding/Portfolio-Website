<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/reset.css">
    <link rel="stylesheet" href="styling/education.css">
    <link rel="stylesheet" href="styling/mobile_education.css" media="screen and (max-width:768px)">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src = "js/refreshCachedPage.js" defer></script>
    <title>Education</title>
</head>
<body>

    <div id="pageGrid">
        <?php
            session_start();
           
            if (!array_key_exists('loggedIn', $_SESSION)){
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
        <br>
        <h1 id = "title">Education</h1>

        <section id="university">
            
            <article>
                    
                <i><strong>Queen Mary University Of London</strong> September 2025 - July 2029</i>
                <ul>
                    <li>
                        <p>Worked in a team of 4 to carry out in-depth research into the impact of AI in the Music industry and presented the findings in front of senior demonstrators</p>
                    </li>
                    <li>
                        <p>
                            Worked in a team of 4 to design a deepfake detector web extension, carried out market research and documented the user/system requirements as well as the design challenges
                        </p>
                    </li>

                    <li>
                        <p>
                                Relevant Courses: Web Technology (HTML/CSS, JS, PHP), Programming in Java
                        </p>
                    </li>
                </ul>
            </article>
        </section>
        
        <section id="sixthForm">
            <article>
                <i> <strong>St Gregory's Catholic Science College</strong> September 2023 - July 2025</i>
                <ul>
                    <li>
                        <p>Achieved a Gold Certificate in the senior UKMT competition</p>
                    </li>
                    <li>
                        <p>Results: <strong>A*A*A*</strong></p>
                    </li>
                </ul>


            </article>
        </section>
    
        <footer>
            <hr>
            <p class = "Copyright">&copy; 2026 Nathan Berhane. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>