
<html lang="en">

<head>
    <link rel="stylesheet" href="styles4.css">
    <style>
        /* Profile Dropdown Styles */
        .profile-container {
            position: relative;
        }

        .profile-dropdown {
            display: inline-block;
            position: relative;
        }

        .profile-picture {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .profile-dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <title>MainPage</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Trailerflix</h1>
            </div>

            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active">Home</li>
                    <li class="menu-list-item">Movies</li>
                    <li class="menu-list-item">Series</li>
                    <li class="menu-list-item">Popular</li>
                    <li class="menu-list-item">Trends</li>
                </ul>
            </div>
            <div class="profile-container">
                <div class="profile-dropdown">
                    <img class="profile-picture" src="profile.jpg">
                    <div class="dropdown-content">
                        <a href="#">Profile</a>
                        <a href="#">Settings</a>
                        <a href="#">Logout</a>
                    </div>

             
            </div>
        </div>
    </div>

    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>

    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('f-1.png');">
                <img class="featured-title" src="f-t-1.png" >
                <p class="featured-desc">THE BATMAN <br>
                     the best superhero to ever exist</p>
                    <button class="featured-button" onclick="window.location.href = 'batmantrailer.html';">Watch</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">English</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="1.jpeg" alt="">
                            <span class="movie-list-item-title">Iron-man</span>
                            <p class="movie-list-item-desc">Gonna be rich like him</p>
                            <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=8ugaeA-nMTc'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="2.jpeg" >
                            <span class="movie-list-item-title">The Thor</span>
                            <p class="movie-list-item-desc">the best Summer Bod</p>
                            <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=JOddp-nlNvQ'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="3.jpeg" alt="">
                            <span class="movie-list-item-title"> Captain Lassi </span>
                            <p class="movie-list-item-desc">No Introduction needed</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=JerVrbLldXw'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="4.jpg" alt="">
                            <span class="movie-list-item-title">Spider-man</span>
                            <p class="movie-list-item-desc">I hate Spiders</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=t06RUxPbp_c'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="5.jpg" alt="">
                            <span class="movie-list-item-title">Avengers</span>
                            <p class="movie-list-item-desc">Come together</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=eOrNdBpGMv8'">Watch</button>
                        </div>



                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Must Watch</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="8.jpg" alt="">
                            <span class="movie-list-item-title">Oblivion</span>
                            <p class="movie-list-item-desc">I never Watched this</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=A27xPYvqERw'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="9.jpg" alt="">
                            <span class="movie-list-item-title">Hobbit</span>
                            <p class="movie-list-item-desc">A good Movie</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=JTSoD4BBCJc'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="10.jpg" alt="">
                            <span class="movie-list-item-title">Due Date</span>
                            <p class="movie-list-item-desc">i dont know</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=1p3NnJ_oiE0'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="11.jpg" alt="">
                            <span class="movie-list-item-title">Kick-ass-2</span>
                            <p class="movie-list-item-desc">must be a good movie</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=Td921lYSBIA'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="12.jpg" alt="">
                            <span class="movie-list-item-title">Emoji 2</span>
                            <p class="movie-list-item-desc">there is a movie now</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=r8pJt4dK_s4'">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>


            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-2.jpg');">
                <img class="featured-title" src="f-t-2.png" alt="">
                <p class="featured-desc">A very Good Show</p>
                <button class="featured-button">WATCH</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Watch again</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="1.jpeg" alt="">
                            <span class="movie-list-item-title">Iron-man</span>
                            <p class="movie-list-item-desc">richhy rich he is</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=8ugaeA-nMTc'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="2.jpeg" alt="">
                            <span class="movie-list-item-title">The Thor</span>
                            <p class="movie-list-item-desc">wanna Have a Body like him</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=JOddp-nlNvQ'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="15.jpg" alt="">
                            <span class="movie-list-item-title">Lego Batman</span>
                            <p class="movie-list-item-desc">as a kid  never had lego.</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=h6DOpfJzmo0'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="3.jpg" alt="">
                            <span class="movie-list-item-title">Storm</span>
                            <p class="movie-list-item-desc">I hate Storm</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=xBH25XxM-7g'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="4.jpg" alt="">
                            <span class="movie-list-item-title">Spider-man</span>
                            <p class="movie-list-item-desc">My fav Superhero</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=t06RUxPbp_c'">Watch</button>
                        </div>
                        
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Anime</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="17.jpg" alt="">
                            <span class="movie-list-item-title">One Peice</span>
                            <p class="movie-list-item-desc">What do you think  the one peice is?</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=MCb13lbVGE0'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="18.jpg" alt="">
                            <span class="movie-list-item-title">Fairy-Tail</span>
                            <p class="movie-list-item-desc">I wanna Watch it</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=4KSN7mxhiYE'">Watch</button>
                        </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="19.jpg" alt="">
                            <span class="movie-list-item-title">Dragon Ball Z</span>
                            <p class="movie-list-item-desc">Rip Akira Toriyama</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=sxufB6DxXk0'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="7.png" alt="">
                            <span class="movie-list-item-title">Tokyo Ghoul</span>
                            <p class="movie-list-item-desc">Messed Up World</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=vGuQeQsoRgU'">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="1.jpg" alt="">
                            <span class="movie-list-item-title">Naruto</span>
                            <p class="movie-list-item-desc">My First Show</p>
                             <button class="featured-button" onclick="document.location='https://www.youtube.com/watch?v=-G9BqkgZXRA'">Watch</button>
                        </div>
                        
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>