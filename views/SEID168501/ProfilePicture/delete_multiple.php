<?php

if(isset($_SERVER['HTTP_REFERER']))
    $path = $_SERVER['HTTP_REFERER'];

require_once ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\ProfilePicture\ProfilePicture;


$obj = new ProfilePicture();

$IDs = $_POST['selectedIDs'];

foreach($IDs as $id) {
    $_GET['id'] = $id;
    $obj->setData($_GET);
    $obj->delete();
}


Utility::redirect($path);
?>