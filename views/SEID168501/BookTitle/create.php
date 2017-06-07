<?php

    require_once "../../../vendor/autoload.php";

    use App\Message\Message;

    $msg = Message::message();

    echo "<div> <div id='message'> $msg </div> </div>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../resources/bootstrap/css/bootstrap.min.css">
    <script src="../../../resources/bootstrap/js/jquery.js"></script>
    <script src="../../../resources/bootstrap/js/bootstrap.min.js"></script>
    <style>
        div.container{
            margin-top: 150px;
        }
        div.col-lg-6{
            background-color: ghostwhite;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <h2>BookTitle Form</h2>
    <form class="form-horizontal" action="store.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-3" for="bookTitle">Book Title:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="bookTitle" placeholder="Enter Book Title" name="bookTitle">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="authorName">Profile Picture:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="authorName" placeholder="Enter Profile Picture" name="authorName">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
    </div>
    <div class="col-lg-3"></div>
</div>
<script src="../../../resources/bootstrap/js/jquery.js"></script>

<script>


    jQuery(

        function($) {
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
        }
    )
</script>
</body>
</html>

