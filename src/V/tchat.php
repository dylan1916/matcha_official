<?php

    require('header.php');
    $getUser = get_user($mail);

    $_SESSION['user'] = $getUser['mail'];
?>
<head>
<link type="text/css" rel="stylesheet" href="V/css/tchat.css">
</head>
        <br/>
        <div class="header">
            <h2><?php echo $getUser['login']; ?></h2>
            <h6 class="time"></h6>
        </div>


        <!-- <br/>
         -->
        <div class="messages-box"></div>
    
        <div class="bottom">
            <div class="field field-area">
                <label for="message" class="field-label">Votre message</label>
                <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
            </div>
            <button type="submit" id="send" class="send">
                <span class="i-send"></span>
            </button>
        </div>


<script src="js/tchat.func.js"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>