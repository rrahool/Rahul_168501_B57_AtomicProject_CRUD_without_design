<?php

    require_once "../../../vendor/autoload.php";

    use App\BookTitle\BookTitle;
    use App\Message\Message;

    $obj = new BookTitle();

    $allData = $obj->trashed();

    $msg = Message::message();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book List - All</title>
    <link rel="stylesheet" href="../../../resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resources/w3css/4/w3.css">
    <script src="../../../resources/bootstrap/js/jquery.js"></script>
    <script src="../../../resources/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../resources/font-awesome-4.7.0/css/font-awesome.min.css">


</head>
<body style="background-color: #E9EBEE">

    <?php echo "<div>  <div id='message'>  $msg </div>   </div>"; ?>


        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <div class="w3-bar w3-border w3-light-grey">
                        <a href="index.php" class="w3-bar-item w3-button">Book List</a>
                        <a href="trashed.php" class="w3-bar-item w3-button w3-black">Trash List</a>
                        <div class="w3-dropdown-hover">
                            <button class="w3-button">More <i class="fa fa-caret-down"></i></button>
                            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                                <a href="#" class="w3-bar-item w3-button">Link 1</a>
                                <a href="#" class="w3-bar-item w3-button">Link 2</a>
                                <a href="#" class="w3-bar-item w3-button">Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="w3-panel w3-blue w3-card-4">
                        <h2> Trashed List of - Book Title </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                        <table class="table-bordered w3-table-all w3-hoverable">
                            <thead>
                            <tr class="w3-green">
                                <th>Serial</th>
                                <th>ID</th>
                                <th>Book Title</th>
                                <th>Profile Picture</th>
                                <th width="35%">Action Buttons</th>
                            </tr>
                            </thead>
                            <?php
                                $serial = 1;
                                foreach($allData as $row){
                                    echo "
                                        <tr>
                                            <td>$serial</td>
                                            <td>$row->id</td>
                                            <td>$row->book_title</td>
                                            <td>$row->author_name</td>
                                            <td>
                                                <a href='view.php?id=$row->id'>
                                                    <button class='w3-btn w3-blue w3-hover-blue'>
                                                        View
                                                    </button>
                                                </a>
                                                <a href='edit.php?id=$row->id'>
                                                    <button class='w3-btn w3-indigo w3-hover-indigo'>
                                                        Edit
                                                    </button>
                                                </a>
                                                <a href='recover.php?id=$row->id'>
                                                        <button class='w3-btn w3-teal w3-hover-teal'>
                                                            Recover
                                                        </button>
                                                    </a>
                                                <a href='delete.php?id=$row->id'>
                                                        <button onclick='alert('I am an alert box');'  class='w3-btn w3-red w3-hover-red' >
                                                            Delete
                                                        </button>
                                                    </a>
                                            </td>
                                        </tr>
                                    ";
                                    $serial++;
                                } //end of foreach loop

                            ?>
                        </table>
                    </div>
            </div>
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
