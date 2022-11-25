<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <script src="https://kit.fontawesome.com/b48549a02e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="commons.css">
    <script>
        let i = 0;
            let txt = "Apprendre le JavaScript facilement pour comprendre l'univers du code.";
            let speed = 50; /* The speed/duration of the effect in milliseconds */
            console.log(txt);
            function typeWriter() {
            if (i < txt.length) {
                document.getElementById("text_capture").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
            }

            console.log(typeWriter());
    </script>
    <title>Learn JS</title>
</head>

<body>
    <header>
        
        <div class="block_header">
            <div class="block_header_left">
                <a href="#">
                    <span>Learn JS</span>
                </a>
                <nav>
                    <ul>
                        <div class="edit_code">
                            <a href="#">
                                <li>Editeur de code</li>
                            </a>
                            <img width="35px" height="30px" opacity="0.7" src="./javascript-1.svg" alt="">
                        </div>

                        <a href="#">
                            <li>Exercices</li>
                        </a>
                        <a href="#">
                            <li>Games</li>
                        </a>
                    </ul>
                </nav>
            </div>

            <div class="block_header_right">
                <form action="#" method="post">
                    <input class="search_js_input" type="text" placeholder="Search Learn JS">
                    <button class="search_js_button">SEARCH</button>
                </form>
                <div>
                    <ul>
                        <li><a href="sig_in_page.php">Sign in</a></li>
                        <li><a href="#"><a href="#">Sign Up</a></a></li>
                    </ul>
                </div>
            </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="block_capture">
            <div class="block_text">
                <span id="text_capture">Apprendre le JavaScript facilement pour comprendre l'univers du code.</span> <br>
                <form action="#" method="" post>
                    <input type="email" placeholder="Email address">
                    <button>Commencer</button>
                    <span class="OR"></span>
                    <span class="github-block">
                        <span>Se connecter avec github </span>
                        <a href="github.com"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24" fill="#fff">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg></a>
                    </span>    
                </form>
            </div>
            <div class="JS LOGO">
                <img width="300px" src="./javascript-39401.png" alt="">
            </div>
        </div>

        <div class="sponsoried">
            <img width="200px" height="200px" src="./logo2.png" alt=""> <br>
            <p>Learn JS est approuvé par Highfive University, l'une des meilleures écoles de codage d'Afrique.</p>
        </div>

        <div class="code">
            <!-- <img src="./Capture d’écran du 2022-11-25 02-24-31.png" alt=""> -->
        </div>
    </main>
    <footer>
        <div class="block_footer">
            <section class="footer">
                <article class="footer_top">
                    <div class="slogan_learn_js">Learn JS</div>
                    <div>
                        <nav>
                            <ul>
                                <li>Documentation JS</li>
                                <li>Learn editor</li>
                                <li>About US</li>
                                <li>Historique JS</li>
                                <li>JS trends</li>
                            </ul>
                        </nav>
                    </div>
                    <div>
                        <nav>
                            <ul>
                                <li>JS Forum</li>
                                <li>Contact</li>
                                <li>Feedbacks Highfive</li>
                                <li>Sign In</li>
                                <li>Sign Up</li>
                            </ul>
                        </nav
                    ></div>
                </article>
                
            </section>
            <article class="footer_bottom">
                <div class="copyrigth"> &copy; 2022 Learn JS, Inc </div>
                <div class="all_svg">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-youtube"></i>
                   
                </div>
            </article>
        </div>
       
        
    </footer>
</body>

</html>