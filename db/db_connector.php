<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-06-09
 * Time: 12:30
 */

$INSERT_QUESTION =<<<EOT
INSERT INTO questions (nickname, post_date, subject, question) VALUES (?, CURDATE(), ?, ?);
EOT;

$INSERT_ANSWER =<<<EOT
INSERT INTO answers (question_ID, answer) VALUES (?, ?);
EOT;

$SELECT_QUESTIONS = "SELECT * FROM questions ORDER BY post_date LIMIT 20";
$SELECT_ANSWER = "SELECT answer FROM answers WHERE question_ID = ?;";

$sessionKEY = "key";
$sessionVAL = "3.141";

class db_connector extends mysqli {

    public function __construct() {
        parent:: __construct('localhost', 'root', 'alogog1997', 'www-db');

        if (mysqli_connect_errno() != 0) {
            die('Connection error (' . mysqli_connect_error() . ') '. mysqli_connect_error());
        }

        parent::query("SET NAMES utf8");
        parent::query("SET CHARACTER SET utf8");
        parent::query("SET collation_connection = utf16_polish_ci");
    }

    public function add_question ($nickname, $subject, $question) {
        global $INSERT_QUESTION;

        $stmt = $this->prepare($INSERT_QUESTION);
        $stmt->bind_param("sss", $nickname, $subject, $question);
        $stmt->execute();
        $stmt->close();
    }

    public function add_answer ($questionID, $answer) {
        global $INSERT_ANSWER;

        $stmt = $this->prepare($INSERT_ANSWER);
        $stmt->bind_param("ss", $questionID, $answer);
        $stmt->execute();
        $stmt->close();
    }

    public function select_questions() {
        global $SELECT_QUESTIONS;

        $stmt = $SELECT_QUESTIONS;
        $result = $this->query($stmt);

        return $result;
    }

    public function select_answer ($QID) {
        global $SELECT_ANSWER;

        $stmt = str_replace("?", $QID, $SELECT_ANSWER);
        $result = $this->query($stmt);
        return $result;
    }
}

$shortcuts = [
    "M" => "Matematyka",
    "P" => "Programowanie",
    "H" => "Hobby",
    "I" => "Inne"
];

function code_to_str ($code) {
    global $shortcuts;
    return(string) isset($shortcuts[$code]) ? $shortcuts[$code] : $code;
}
