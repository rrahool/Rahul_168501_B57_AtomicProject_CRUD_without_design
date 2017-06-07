<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 5/29/2017
 * Time: 1:38 PM
 */

namespace App\Birthday;

use App\Message\Message;
use App\Model\Database;
use App\Utility\Utility;
use PDO;

class Birthday extends Database
{

    public $id;
    public $name;
    public $dob;


    public function setData($postArray){

        if(array_key_exists("id",$postArray)){
            $this->id = $postArray['id'];
        }

        if(array_key_exists("name",$postArray)){
            $this->name = $postArray['name'];
        }

        if(array_key_exists("dob",$postArray)){
            $this->dob = $postArray['dob'];
        }

    } // end of setData()

    public function store(){

        $query = "INSERT INTO `tbl_birthday` (`name`, `dob`) VALUES (?, ?);";

        $dataArray = array($this->name, $this->dob);

        $STH = $this->DBH->prepare($query);
        $result = $STH->execute($dataArray);

        if($result){
            Message::message("Success :) Data Inserted Successfully.");
        }
        else{
            Message::message("Failure :( Data Not Inserted!");
        }
    } // end of store()


    public function index(){

        $query = "SELECT * FROM `tbl_birthday`";

        $STH = $this->DBH->query($query);

        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData = $STH->fetchAll();
        return $allData;

    } // end of index()

    public function view(){

        $query = "SELECT * FROM `tbl_birthday` WHERE `id`=".$this->id;

        $STH = $this->DBH->query($query);

        $STH->setFetchMode(PDO::FETCH_OBJ);
        $singleData = $STH->fetch();
        return $singleData;

    } // end of view()

    public function update(){

        $query = "UPDATE `tbl_birthday` SET `name` = ?,`dob` = ? WHERE `id` = $this->id;";

        //Utility::dd($query);

        $dataArray = array($this->name, $this->dob);

        $STH = $this->DBH->prepare($query);
        $result = $STH->execute($dataArray);

        if($result){
            Message::message("Success :) Data Updated Successfully.");
        }
        else{
            Message::message("Failure :( Data Not Updated!");
        }
    } // end of update()


}