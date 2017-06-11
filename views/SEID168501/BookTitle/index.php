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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../../resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../resources/w3css/4/w3.css">
        <script src="../../../resources/bootstrap/js/jquery.js"></script>
        <script src="../../../resources/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../../resources/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../resources/style.css">

    </head>
    <body style="background-color: #E9EBEE">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                    echo "<div style='background-color: lightskyblue; border-radius: 5%; font-family: Comic Sans MS;'>
                                <div id='message' class='text-center'>
                                  <strong> $msg </strong>
                                </div>
                           </div>";
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="w3-bar w3-border w3-light-grey">
                    <a href="create.php" class="w3-bar-item w3-button" style="text-decoration: none">Add Book</a>
                    <a href="index.php" class="w3-bar-item w3-button w3-black" style="text-decoration: none">Book List</a>
                    <a href="trashed.php" class="w3-bar-item w3-button" style="text-decoration: none">Trash List</a>
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
                            <h2> Active List of - Book Title </h2>
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
                    <div class="col-sm-5"></div>
                </div>

                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-lg-7">
                        <button class="w3-btn w3-red w3-hover-red">Delete Selected</button>
                        <button class="w3-btn w3-orange w3-hover-orange w3-text-white w3-hover-text-white">Trash Selected</button>
                        <button class="w3-btn w3-indigo w3-hover-indigo">Email This List</button>
                        <div class="w3-dropdown-hover">
                            <button class="w3-btn w3-brown w3-hover-brown">Download <i class="fa fa-caret-down"></i></button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="#" class="w3-bar-item w3-btn" style="text-decoration: none">As PDF</a>
                                <a href="#" class="w3-bar-item w3-btn" style="text-decoration: none">As Excel</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                            <table class="table-bordered w3-table-all w3-hoverable">
                                <thead>
                                <tr class="w3-green">
                                    <th>All <input class="checkbox-inline" type="checkbox"></th>
                                    <th>Serial</th>
                                    <th>Book ID</th>
                                    <th>Book Title</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <?php
                                    $serial = 1;
                                    foreach($allData as $row){
                                        echo "
                                            <tr>
                                                <td>
                                                    <input class='checkbox-inline' type='checkbox'>
                                                </td>
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
                                                    <a href='trash.php?id=$row->id'>
                                                            <button class='w3-btn w3-orange w3-hover-orange w3-text-white w3-hover-text-white'>
                                                                Trash
                                                            </button>
                                                        </a>
                                                    <a href='delete.php?id=$row->id'>
                                                            <button onclick='return confirm_delete()' class='w3-btn w3-red w3-hover-red'>
                                                                Delete
                                                            </button>
                                                        </a>
                                                        <a href='email.php?id=$row->id'>
                                                            <button class='w3-btn w3-teal w3-hover-teal w3-text-white w3-hover-text-white'>
                                                                Email
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
                <select class="form-control"  name="DataPerPage" id="DataPerPage" onchange="javascript:location.href = this.value;" >
                    <option value="?DataPerPage=3">Showing 3 books per page</option>
                    <option value="?DataPerPage=4">4 books per page</option>
                    <option value="?DataPerPage=5">5 books per page</option>
                    <option value="?DataPerPage=6">6 books per page</option>
                    <option value="?DataPerPage=7">7 books per page</option>
                    <option value="?DataPerPage=8">8 books per page</option>
                    <option value="?DataPerPage=9">9 books per page</option>
                </select>
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
