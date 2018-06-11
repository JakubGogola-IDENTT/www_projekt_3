<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-05
 * Time: 19:52
 */

require_once(__DIR__ . "/gen/page_gen.php");
require_once(__DIR__."/gen/menu_item.php");
require_once(__DIR__."/gen/return_item.php");

$title = "Jakub Gogola";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["css/style.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, []);

echo $page_gen->gen_begin();
?>
    <div class="container">
        <div class="row">
            <div class="col-2-6">
                <img id="authorImg" src="images/jg.jpg" alt="error" class="author-photo">
            </div>
            <div class="col-4-6">
                <p class="lato-font">
                    Cześć! Jestem Kuba. Jestem studentem informatyki na Wydziale Podstawowych Problemów Techniki na Politechnice Wrocławskiej.
                    Zajmuję się również informatyką hobbistycznie, ale obok tej pasji posiadam również zainteresowania takie jak
                    fotografia czy literatura fantasy. Jeżeli jesteś zainteresowany współpracą ze mną to zachęcam do zapoznania się z moją stroną
                    i do kontaktu.
                </p>
            </div>
        </div>
    </div>

<div class="container">
    <div class="menu">
        <div class="menu-header roboto-font">
            Czym się zajmuję?
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-2-6">
            <div class="icon-container">
                <img src="images/code.png" alt="error" class="icon">
            </div>
            <p class="lato-font">
                Jestem programistą. Na studiach najczęściej programuję w językach takich jak Java, C/C++ czy JavaScript.
                Samodzielnie uczę się Pythona.
            </p>
        </div>
        <div class="col-2-6">
            <div class="icon-container">
                <img src="images/go.png" alt="error" class="icon">
            </div>
            <p class="lato-font">
                Ostatnio zainteresowałem się również w miarę nowym i dynamicznie rozwijającym się językiem programowania jakim jest
                <a href="https://golang.org/">Go</a>. W chwilach wolnych od nauki i pracy staram się go uczyć.
            </p>
        </div>
        <div class="col-2-6">
            <div class="icon-container">
                <img src="images/github.png" alt="error" class="icon">
            </div>
            <p class="lato-font">
                Jeżeli chcesz zobaczyć trochę mojego kodu to zachęcam do odwiedzenia mojego repozytorium na
                <a href="https://github.com/JakubGogola">GitHubie</a>, gdzie umieszczam swoje najlepsze projekty.
            </p>
        </div>
    </div>
</div>
<?php
echo $page_gen->put_script("js/local-storage.js");
echo $page_gen->gen_end();
?>