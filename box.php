<?php
    date_default_timezone_set("Europe/Vilnius");
 
    session_start();
    if(!isset($_SESSION['messages'])) {
        $_SESSION['messages'] = [];
    }
 
    if(isset($_POST['message'])) {
        $msg = ['date' => date("Y-m-d H:i:s"), 'message' => $_POST['message']];
        array_push($_SESSION['messages'], $msg);
    }
 

// Create connection
$conn = mysqli_connect("localhost", "EvaldasM", "AciuUzDarba777", "evaldasm");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM messages";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row= mysqli_fetch_assoc($result)) {
        print_r($row);
    }
} else {
    echo "0 result";
}





?>
<!DOCTYPE html>
<html>
<head>
    <title>Box</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Shoutbox</h1>
        <div class="row">
            <div class="col-sm-12">
   
                <?php
 
                foreach ($_SESSION['messages'] as $entry) {
                    echo '<div class="card">
                    <div class="card-block"><strong>' . $entry['date'] . '</strong> : ' . $entry['message'] . '</div>
                    </div><br />';
                }
 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                      </div>
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>