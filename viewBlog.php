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
        ?>

        <h1 id = "title">My Blog</h1>

        <section id="blogs">

            <article class="blogEntry">
                <div class="headline">
                    <h1 class="blogTitle">Real-world applications of formal languages, Formal Languages, Finite State Automata, Context-Free Grammars, and Pushdown automata </h1>
                    <i>April 2026</i>
                </div>
                <p> 
                    Finite-state automata are abstract machines that model various computational processes ranging from embedded systems to natural language processing. For example, FSAs are used in validation to check that a user input is in the correct format (e.g. an email address). This is done by constructing an FSA from a regular expression, such that a word is accepted if the FSA ends up in the final state after traversing every symbol in the word, starting from the initial state. FSAs are also used in text editors to find and replace text on the page that matches an expression entered by the user. Moreover, finite state machines are used in embedded systems like vending machines and traffic lights to model states and their transitions. <br>

Finite-state automata can also be used to model the TCP protocol. Transitions in the finite state automata represent TCP signals (e.g., an ACK being sent), whereas states represent the state of a TCP connection (e.g. Closed, Established). <br>

Context-free grammars are more expressive than finite state automata and are used to represent languages that require memory beyond the system’s current state. CFGs can represent languages recursively to define patterns. For example, the CFG S → 0S1 uses recursion to represent all words of the form 0n1n where n is a natural number. This language cannot be defined by a finite state automaton, as it would require an infinite number of states <br>

As a result, context-free grammars can be used to represent more complex formal languages, like the syntax rules of a programming language. CFGs are used in compilers to parse source code and enforce syntax rules. This enables a suitable error message to be displayed for the syntax rule that the code breaks. Furthermore, CFGs are used to represent algebraic expressions in symbolic calculators to evaluate complicated expressions that cannot be evaluated simply by using a stack. For example, a finite state automaton cannot represent mathematical expressions with an arbitrary number of nested brackets, as this would require recursion, which lends well to context-free grammars.<br>

Pushdown automata are equivalent to context-free grammars, as all CFGS can be converted to a PDA and vice versa. However, context-free grammars are used to define context-free languages, whereas pushdown automata are used to systematically recognise context-free languages. A pushdown automaton resembles a finite state automaton, but has a stack, enabling it to push symbols onto the stack and pop them off. A word is therefore in a context-free language if the pushdown automaton’s current state after traversing through every symbol in the word ends up in the final state. Using a pushdown automaton can be more efficient than using the CYK algorithm, since the context-free grammar would need to be converted into Chomsky Normal Form (CNF) before executing the CYK algorithm. <br>

In conclusion, finite state automata, context-free grammars and pushdown automata are abstract machines in the Chomsky hierarchy that can represent formal languages. Finite state automata are the least expressive of the three. In contrast, context-free grammars and pushdown automata are equivalent, such that any context-free grammar can be converted to an equivalent pushdown automaton and vice versa. <br>
<strong>References</strong><br>
Gribkoff, E., 2013. Applications of deterministic finite automata. UC Davis, pp.1-9.<br>

Wyard, P.J. and Nightingale, C., 2012. ITS APPLICATIONS TO CONTEXT FREE GRAMMAR. Neural Networks for Vision, Speech and Natural Language, 1, p.203.


                </p>

            </article>
            

            <article class="blogEntry">
                <div class="headline">
                    <h1 class="blogTitle">AI and Operations Internship at PolishPad</h1>
                    <i>March 2026</i>
                </div>
                <p> 
                    I am proud to announce that I have secured an internship at PolishPad.
                    I will be leveraging AI tools to optimise workflow and improve user experience.
                    I look forward to this new challenge!
                </p>

            </article>

        

            <article class = "blogEntry">
                <div class="headline">
                    <h1 class="blogTitle">Course Representative at Queen Mary Univeristy of London</h1>
                    <i>Octber 2025</i>
                </div>
                <p>
                    I was elected course rep for my course (Computer Science with AI) in October.
                </p>
                <p>
                    I look forward to representing the voices of my peers.
                </p>

            </article>
        </section>
            

        <footer>
            <hr>
            <p class = "Copyright">&copy; 2026 Nathan Berhane. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>