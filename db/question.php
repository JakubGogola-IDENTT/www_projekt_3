<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-06-09
 * Time: 15:30
 */
session_start();
require_once(__DIR__ . "/db_connector.php");
$input_status = isset($_POST["NICK"]) && isset($_POST["SUBJECT"]) && isset($_POST["QUESTION"]) &&
                isset($_POST["RESULT"]) && isset($_SESSION[$sessionKEY]) && ($_SESSION[$sessionKEY] === $sessionVAL) &&
                isset($_SESSION['captcha_result']) && ($_SESSION['captcha_result'] == $_POST["RESULT"]);


if(!$input_status) {
    $_SESSION = [];
    session_destroy();
    session_unset();
    header("location: ../qa.php");
} else{
    $NICK = substr(trim($_POST["NICK"]),0,20);
    $SUBJECT = substr($_POST["SUBJECT"],0,10);
    $QUESTION = strip_tags(trim($_POST["QUESTION"]),"<p><strong>");

    $db = new db_connector();

    $db->add_question($NICK, $SUBJECT, $QUESTION);
    $db->close();
    $_SESSION = [];
    session_destroy();
    session_unset();
    header("location: ../index.php");
}




