<?php
require_once(__DIR__ ."/gen/page_gen.php");
require_once (__DIR__."/db/db_connector.php");

$TEMPLATE =<<<EOT
<div class="container">
    <div class="row">
        <div class="col-6-6 question">
            <h3 class="roboto-font">{{NICK}}</h3>
            <h4 class="roboto-font">{{SUBJECT}}</h4>
            <p class="lato-font">{{QUESTION}}</p>
        </div>
        <div class="col-6-6 answer">
            <p class="lato-font">{{ANSWER}}</p>
        </div>
    </div>
</div>
EOT;

session_start();

$title = "Q&A";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["css/style.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$return_items[] = new return_item("Strona główna", "index.php");
$return_items[] = new return_item("Kontakt", "contact.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items);

echo $page_gen->gen_begin();
?>
<div class="container">
    <div class="row">
        <div class="col-6-6 ">
            <p class="lato-font">
                Zachęcam do zadawania mi pytań. W miarę możliwości postaram się na nie odpowiedzieć. Zazwyczaj
                odpowiadam w ciągu 2-3 dni. Możesz to zrobić klikając na poniższy przycisk.
            </p>
            <h3 class="roboto-font button-style">
                <a href="question_form.php">Zadaj mi pytanie!</a>
            </h3>
            <p class="lato-font">
                Dotychczas zadane pytania znajdziesz poniżej.
            </p>
        </div>
    </div>
</div>


<?php
    $db = new db_connector();

    $result = $db->select_questions();

    while (($row = $result->fetch_assoc()) !== null) {
        $template_copy = $TEMPLATE;
        $answer_result = $db->select_answer($row['ID']);

        $str = str_replace(["{{NICK}}", "{{QUESTION}}", "{{SUBJECT}}"],
            [$row['nickname'], $row['question'], code_to_str($row['subject'])], $template_copy);


        if (($answer_row = $answer_result->fetch_assoc()) != null) {
            $str = str_replace("{{ANSWER}}", $answer_row['answer'], $str);
        } else {
            $str = str_replace("{{ANSWER}}", "", $str);
        }

        echo $str;
    }

echo $page_gen->gen_end();
?>
