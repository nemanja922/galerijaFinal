<?php
/**
 * Created by PhpStorm.
 * User: nemanja
 * Date: 24.8.16.
 * Time: 16.42
 */

if(empty(session_id())){
    session_start();
}

require_once("new_config.php");
require_once("database.php");
require_once("user.php");
require_once("functions.php");
require_once("session.php");

if(!isset($_SESSION)){
    header('Location: login.php');
} else {
    if($_SESSION['signed_in'] != true){
        header('Location: login.php');
    }
}
