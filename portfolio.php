<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/reset.css">
    <link rel="stylesheet" href="styling/portfolio.css">
    <link rel="stylesheet" href="styling/mobile_portfolio.css" media = "screen and (max-width:768px)">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Play:wght@400;700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    
    <title>Portfolio</title>
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
        
        <h1 id="title"> Portfolio</h1>
        <section id="experience">
            <h2>Experience</h2>
            <article>
                <div class="headline">
                <strong>AI and Operations Intern at PolishPad</strong>
                <i class="date"><strong>March 2026 - present</strong></i>
                </div>
                <ul>
                    <li><i>Implementing AI tools to manage booking issues, cancellations, reminders, and follow-ups</i></li>
                    <li><i>Leveraging AI to predict issues and generate insoghts</i></li>
                    <li><i>Developing guides, FAQs, and templates to reduce workload</i></li>
                    <li><i>Implementing AI solutions to identify repetitive tasks and maximise efficiency</i></li>
                </ul>
            </article>
            
            <article>
                <div class = "headline">
                <strong>AI trainer at Dataannotations</strong>
                <i class = "date"><strong>August 2025 - present</strong></i>   
                </div>
                <ul>
                    <li>
                        <i> 
                            Employed AI tools to automate checks for the compatibility of PC builds with components to train an AI model to handle customer service requests in the Holodeck project
                        </i>
                    </li>

                    <li>
                        <i>
                            Completed 500+ tasks across 30+ projects, conducting in-depth research to evaluate STEM-related AI responses
        in line with project-specific instructions, rectifying factual errors and incorrect citations
                        </i>
                    </li>

                    <li>
                        <i>
                            Designed system prompts for enterprise-level APIs and created formatted (JSON/XML) user inputs and analysed
        output patterns to highlight weaknesses of the AI model
                        </i>
                    </li>

                </ul>
            </article>


        </section>

        <section id="projects">
            <h2>Projects</h2>
            <article>
                <ul>
                    <div class = "headline">
                    <a href="https://github.com/NathonianCoding/Uniread" class = "projectLink"><strong>Uniread | <i>Flask, OpenAI, base64, Docker</i></strong></a>
                    <i class="date"><strong>December 2025 - present</strong></i>
                    </div>
                    <li>
                        <i>
                            Developing a full-stack web application, leveraging Flask to render the web page and parse submitted files
                        </i>
                    </li>

                    <li>
                        <i>
                            Implemented caching, reducing latency by 99% in a cache hit
                        </i>
                    </li>

                    <li>
                        <i>
                            Leveraged the gpt5-nano OpenAI API to generate accurate book recommendations (pre-requisites and further
        reading) based on a specified book
                        </i>
                    </li>

                </ul>

                <ul>
                    <div class = "headline">
                    <a href="https://github.com/NathonianCoding/Packet-Encoder" class = "projectLink"><strong>Packet Encoder | <i>Assembley, QtSpim</i></strong></a>
                    <i class="date"><strong>December 2025 - January 2026</strong></i>
                    </div>
                    <li>
                        <i>
                            Developed a MIPS program that encodes a domain name into a Domain query packet, in Big Endian
                        </i>
                    </li>

                    <li>
                        <i>
                            Achieved a score of 100% in this coursework as part of the Computer Systems and Networks module
                        </i>
                    </li>

                </ul>

                <ul>
                    <div class = "headline">
                    <a href="https://github.com/NathonianCoding/Dynamic-Labyrinth" class = "projectLink"><strong>Dynamic Labyrinth | <i>Python, SQLite3, Tkinter</i></strong></a>
                    <i class="date"> <strong>September 2024 - March 2025 </strong></i>
                    </div>
                    <li>
                        <i>
                            Implemented advanced algorithms, including: A* search, depth-first search, and recursive hashing (to deal with
        collisions)
                        </i>
                    </li>

                    <li>
                        <i>
                            Developed a responsive and user-friendly UI, leveraging Tkinter and pygame to dynamically render the game,
        seamlessly displaying changes to the game state and transitioning between GUIs
                        </i>
                    </li>

                    <li>
                        <i>
                            Designed a relational database, using SQLite3 to store player statistics and save progress
                        </i>
                    </li>

                </ul>
            </article>
        </section>

        <section id="volunteering">
            <h2>Voluntary Experience</h2>
            <article>
                <div class = "headline">
                <strong>Course Representative</strong>
                <i class = "date"> <strong>October 2025 - present</strong></i>
                </div>
                <ul>
                    <li>
                        <i>
                            Designed engaging online surveys to collate feedback from over <strong>400</strong> students about the course and used iWeaver to
        analyse trends and highlight common issues
                        </i>
                    </li>

                    <li>
                        <i>
                            Organised findings in a report and presented this feedback in student voice committees
                        </i>
                    </li>

                    <li>
                        <i>
                            Followed up on action after meetings by relaying important information to other students through online forums
                        </i>
                    </li>

                </ul>
            </article>
        </section>

        <section id="cv">
            <h2>CV</h2>
            <aside>
                <a href="files/CV.pdf">Click here to view my CV</a>
            </aside>
        </section>

        <footer>
            <hr>
            <p class = "Copyright">&copy; 2026 Nathan Berhane. All rights reserved.</p>
        </footer>
    </div>
    
    
    
</body>
</html>