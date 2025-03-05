<?php 
    
        if(isset($_COOKIE['__user_token__ssid'])) {
            ?><script>window.location.href="index.php"</script><?php
        }
 ?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up for Twitter</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="./umuman_css_folder/signup.css">
</head>
<body>
    <style>

    </style>

    <div class="container">
        <div class="signup-box">
            <h1>Sign Up Now</h1>
            <form id="form">
                <input type="text" id="name_field" placeholder="Name" required>
                <input type="email" id="email_field" placeholder="Email" required>
                <input type="password" id="pass_field" placeholder="Password" required>
                <button type="submit" class="signup-btn">Sign up</button>
            </form>
            <p class="terms">
                By signing up, you agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
            </p>
            <p class="login">
                Already have an account? <a href="login.php">Sign in</a>
            </p>
        </div>
    </div>

</body>
<script src="./js_files2232/signup.js">
</script>
</html>
