<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/reset.css">
    <link rel="stylesheet" href="styling/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styling/mobile_index.css" media = "screen and (max-width:768px)">

    <title>Homepage</title>
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


            

        <section id = "aboutme">
            <article>
                <h2>About Me</h2>
            
                <p>
                    My name is Nathan Berhane. I am an undergraduate studying Computer Science with AI at Queen Mary University of London and course representative for Computer Science with AI. 
                    I am a tech enthusiast and aspiring software developer. 
                </p>
                <br>
                <p>    
                    I am passionate about using technology to solve real-world problems that people face.
                    I am experienced in Python, Java, HTML/CSS and SQL.
                </p>
                <br>
                <p>
                    I am currently collaborating with fellow students to add more functionalities to the Pass Rota website
                    to improve user experience. In this project I am using Django(Python) and Vue.Js.
                </p>
            
            </article>

            <figure>
                <img  id = "profilePicture" src="images/Picture.jpg" alt="No picture available">
                <figcaption id = "profileCaption">Nathan Berhane</figcaption>
            </figure>
                
        </section>


        <aside id="githubLink">
                
            <a href="https://github.com/NathonianCoding"><img src="images/github.png" alt="github" id = "githubIcon"></a>
            
                
        </aside>

        <aside id="linkedInLink">
            <a href="https://www.linkedin.com/in/nathan-berhane/"><img src="images/linkedinProfile.png" alt="" id = "linkedInIcon"></a>

        </aside>

        <footer>
            <hr>
            <p class = "Copyright">&copy; 2026 Nathan Berhane. All rights reserved.</p>
        </footer>
    </div>
  
   
    
</body>
</html>