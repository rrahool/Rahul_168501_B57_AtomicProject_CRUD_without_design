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
    <link rel="stylesheet" href="../../../resources/style.css">


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
                <div class="col-sm-5">
                    <div class="w3-panel">
                        <form>
                            <input type="text" name="search" placeholder="Search..">
                            <input class="w3-check" type="checkbox" checked="checked">
                            <label> By Title</label>
                            <input class="w3-check" type="checkbox">
                            <label> By Author</label>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10"></div>
                <div class="col-lg-2">
                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-brown">Download</button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                            <a href="#" class="w3-bar-item w3-button">Download PDF</a>
                            <a href="#" class="w3-bar-item w3-button">Download Excel</a>
                        </div>
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
                                                        <button onclick='return confirm_delete()'  class='w3-btn w3-red w3-hover-red' >
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
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a class="active" href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <br><br><br>
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

    <script type="text/javascript">
        function confirm_delete(){
            return confirm('Are you sure to Delete?');
        }
    </script>




</body>
</html>
