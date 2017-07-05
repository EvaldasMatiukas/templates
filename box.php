<?php
session_start();
 
    date_default_timezone_set("Europe/Vilnius");

if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 0;
}
 
if (isset($_POST["button"])) {
    $_SESSION["counter"] ++;
    $post_number = $_SESSION["counter"];
    //array_push($presentation, $_POST);
    $_SESSION["posts"][$post_number] = $_POST;
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style.css">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <title>Shoutbox</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Dosis:300,400,500');
 
            body {
                background-color: #336699 !important;
                font-family: 'Dosis', sans-serif;
                color: #666666 !important;
            }
 
            .container {
                background-color: rgba(250, 250, 250, 0.9);
            }
 
            .post{
                border-bottom: 1px solid teal;
                margin: 5px;
                background-color: rgba(255, 255, 250, 0.5);
            }
 
            .post:hover{
                background-color: rgba(255, 255, 255, 1);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php

                    if (isset($_SESSION["posts"])) {

                        $msg = ['date' => date("Y-m-d H:i:s"), 'message' => $_POST['message']];
                        array_push($_SESSION['messages'], $msg);

                        for ($i = count($_SESSION["posts"]); $i >= 1; $i--) {
                            $username = $_SESSION["posts"][$i]["user"];
                            $email = $_SESSION["posts"][$i]["email"];
                            $message = $_SESSION["posts"][$i]["message"];
 
                            echo "<div class=\"row post\"><div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">"
                            . $username . " <strong>(" . $email . ")</strong></div><div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"><h5>"
                            . $message . "</h5></div></div>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 col-md-2 col-lg-3"></div>
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control text" type="text" name="user" required>
                            <label>Email</label>
                            <input class="form-control email" type="text" name="email" required>
                            <label>Message</label>
                            <textarea class="form-control" name="message" id="exampleTextarea" rows="3" required></textarea>
                            <button class="btn btn-primary" name="button" value="submit">Post</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-1 col-md-2 col-lg-3"></div>
            </div>
        </div>
    </body>
</html>