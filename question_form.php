<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-06-09
 * Time: 15:21
 */
require_once (__DIR__."/db/db_connector.php");
require_once(__DIR__ ."/gen/page_gen.php");
require_once (__DIR__."/gen/captcha_gen.php");

session_start();
$_SESSION[$sessionKEY] = $sessionVAL;

$title = "Zadaj pytanie";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["style.css", "grid.css", "reset.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];
$menu_items = [];
$return_items = [];

$return_items[] = new return_item("Strona główna", "index.php");
$return_items[] = new return_item("Kontakt", "contact.php");
$return_items[] = new return_item("Q&A", "qa.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items);

echo $page_gen->gen_begin();
?>
<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Tutaj możesz zadać mi pytanie. Pamiętaj, aby wymyślić sobie pseudonim, po którym będziesz mógł je zidentyfikować.
                Odwiedź moją stronę z pytaniami w ciągu najbliższego tygodnia, a na pewno znajdziesz tam wyczekiwaną odpowiedź!
            </p>

           <form method="post" action="db/question.php">
               <div class="form-row">
                   <label class="form-label roboto-font">Pseudonim</label>
                   <input class="lato-font" type="text" name="NICK" maxlength="20" placeholder="Podaj pseudonim" required>
               </div>

                <div class="form-row">
                    <label class="form-label roboto-font">Temat</label>
                    <select class="lato-font" name="SUBJECT">
                        <option value="M">Matematyka</option>
                        <option value="P">Programowanie</option>
                        <option value="H">Hobby</option>
                        <option value="I">Inne</option>
                    </select>
                </div>

               <div class="form-row">
                   <textarea class="lato-font" name="QUESTION" rows="10" cols="100" placeholder="Tutaj wpisz swoje pytanie" required></textarea>
               </div>

               <div class="form-row">
                   <p class="lato-font">
                       Udowodnij, że nie jesteś robotem licząc wyznacznik macierzy 3x3!
                   </p>
               </div>

               <?php
               $captcha_gen = new captcha_gen();
               $_SESSION['captcha_result'] = $captcha_gen->generate();
               echo $captcha_gen->display();
               ?>

               <div class="form-row">
                   <label class="form-label roboto-font">Twój wynik to: </label>
                   <input class="lato-font" type="text" name="RESULT" maxlength="20" placeholder="Wynik" required>
               </div>

               <div  class="form-row">
                   <input type="submit" value="Wyślij">
               </div>
           </form>
        </div>
    </div>
</div>

<?php
echo $page_gen->gen_end();
?>

