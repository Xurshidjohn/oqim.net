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
        <link rel="stylesheet" href="umuman_css_folder/profile.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Twitter</h2>
            <a href="index.php"><img class="img-a" src="images/house-2.svg" width="40" alt=""> Home</a>
            <a href="explore.php"><img class="img-a" src="images/compass-2.svg" width="40" alt=""> Explore</a>
            <a href="post.php"><img class="img-a" src="images/plus-2.svg" width="40" alt=""> Post</a>
            <a href="notfiations.php"><img class="img-a" src="images/bell-2.svg" width="40" alt=""> Notifications</a>
            <a href="#"><img class="img-a" src="images/user-3.svg" width="40" alt=""> Profile</a>
        </div>
        <div class="main-content">
            <div id="user_content">
            	<div class="display_flex-1">
            		<div class="img_content">
            			<img src="images/user_profile.svg" width="120" alt="">
            		</div>
                    <div class="txt_cont_and_block">
                        <div class="texts_content">
                        <div class="name_content">
                            <span>Xurshid</span>
                        </div>
                        <div class="bio_content">
                            Salom man odamman lekin buni hech kim bilmedi!
                        </div>
                        <div class="btn_group">
                            <button class="button_ch_bio">change profile</button>
                            <button id="logout_button">logout</button>
                        </div>
                    </div>
                    </div>
            	</div>
            </div>
        </div>
    </div>
</body>
<script src="js_files2232/profile.js"></script>
</html>