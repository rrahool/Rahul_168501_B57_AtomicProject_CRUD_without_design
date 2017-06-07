<?php

require_once "../../../vendor/autoload.php";

use App\ProfilePicture\ProfilePicture;
use App\Utility\Utility;

$obj = new ProfilePicture();

$obj->setData($_POST);

$obj->update();

Utility::redirect("index.php");