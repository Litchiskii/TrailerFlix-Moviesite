<?php
session_start();
$_SESSION;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <title>Trailerflix India - Watch TV Shows Trailers, Watch Movies Trailers</title>
</head>
<body>

    <div class="container">
        <nav class="navbar">
            <div class="left">
                <img src="trailerlogo.jpg"">
            </div>
            <div class="right">
                <select name="language" class="language">
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                </select>
                <button><a href="login.html">Login</a></button>
            </div>
        </nav>

        <div class="title">
            <div class="content">
                <h1>Unlimited movie,TV shows Trailers.</h1>
                <h2>Watch anywhere. Cancel anytime.</h2>
                <form action="#">
                    <h3>Ready to watch? Enter your email to create or restart your membership.</h3>
                    <div class="email">
                        <input type="email" name="email" placeholder="Email address">
                        <button><a href="loginPage.html">Get Started  ></a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>