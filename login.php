<?php

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailerflix Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Custom styles -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <!-- Logo -->
    <div class="logo">
      <img src="trailerlogo.jpg" alt="Trailerflix Logo">
    </div>
    <!-- Login Form -->
    <form id="loginForm" action="login.php" method="post">
      <h2 class="mb-4">Login to Trailerflix</h2>
      <!-- Email Input -->
      <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <!-- Password Input -->
      <div class="form-group">
        <label for="password" class="form-label">Password:</label>
        <div class="input-group">
          <input type="password" id="password" name="password" class="form-control" required>
          <button type="button" class="btn btn-outline-secondary toggle-password"><i class="fas fa-eye"></i></button>
        </div>
      </div>
      <!-- Login Button -->
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
    <!-- Forgot Password Link -->
    <div class="forgot-password-link mt-2">
      <a href="forgot_password.html">Forgot Password?</a>
    </div>
    <!-- Sign Up Link -->
    <div class="signup-link mt-3">
      <p>Don't have an account? <a href="Signinpage.html">Sign up now</a></p>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap Bundle JS (Bootstrap JS + Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle Password Visibility
    $(".toggle-password").click(function() {
      $(this).toggleClass("active");
      var type = $(this).hasClass("active") ? "text" : "password";
      $("#password").attr("type", type);
    });
  </script>
</body>
</html>
