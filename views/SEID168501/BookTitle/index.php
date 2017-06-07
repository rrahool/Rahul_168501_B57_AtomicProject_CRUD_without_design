<?php

    require_once "../../../vendor/autoload.php";

    use App\BookTitle\BookTitle;
    use App\Message\Message;

    $obj = new BookTitle();

    $allData = $obj->index();

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

</head>
<body style="background-color: #E9EBEE">

    <?php echo "<div>  <div id='message'>  $msg </div>   </div>"; ?>


        <div class="container">

            <div class="row">
                <div class="col-sm-5">
                    <div class="w3-panel w3-blue w3-card-4">
                        <h2> Active List of - Book Title </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                        <table class="w3-table-all w3-hoverable">
                            <thead>
                            <tr class="w3-green">
                                <th>Serial</th>
                                <th>ID</th>
                                <th>Book Title</th>
                                <th>Profile Picture</th>
                                <th>Action Buttons</th>
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
                                                    <button class='w3-button w3-white w3-border w3-border-green w3-round-medium'>
                                                        View
                                                    </button>
                                                </a>
                                                <a href='edit.php?id=$row->id'>
                                                    <button class='w3-button w3-white w3-border w3-border-blue w3-round-medium'>
                                                        Edit
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
                <div class="col-sm-2"></div>
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
