<?php if(!$_COOKIE['__user_token__ssid']) {
    ?>
    <script type="text/javascript">window.location.href="login.php"</script>
    <?php
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Oqim.net - Kelajak sari</title>
    <link rel="stylesheet" href="umuman_css_folder/main.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Twitter</h2>
            <a href="#"><img class="img-a" src="images/house-2.svg" width="40" alt=""> Home</a>
            <a href="#"><img class="img-a" src="images/compass-2.svg" width="40" alt=""> Explore</a>
            <a href="#"><img class="img-a" src="images/plus-2.svg" width="40" alt=""> Post</a>
            <a href="#"><img class="img-a" src="images/bell-2.svg" width="40" alt=""> Notifications</a>
            <a href="profile.php"><img class="img-a" src="images/user-3.svg" width="40" alt=""> Profile</a>
        </div>
        <div class="main-content">
            <div id="posts">
                <p>Posts not found!</p>
            </div>
        </div>
        <div class="create_post">
            <div id="form">
                <h1>Short thought?</h1>
                <textarea name="message" id="form_content" placeholder="type.."></textarea><br><br>
                <button type="submit" id="submit_button_sht">Publish</button>
                <div id="for_message">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="jquery_codes.js">
</script>
</html>