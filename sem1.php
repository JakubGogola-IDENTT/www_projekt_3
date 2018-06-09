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
require_once (__DIR__."/gen/subject_div_gen.php");
require_once (__DIR__."/gen/mathjax_item.php");

$title = "Semestr I";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["style.css", "grid.css", "reset.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$return_items[] = new return_item("Strona główna", "index.php");
$return_items[] = new return_item("Edukacja", "education.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items);
$subject_div_gen = new subject_div_gen();
$mathjax_gen = new mathjax_item();

echo $page_gen->gen_begin();
?>
<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Pierwszy semestr studiów był dosyć ciężki - nowi ludzie, nowe wyzwania. Zupełnie inny tryb nauki niż dotychczas.
                Trzeba było się jednak zmierzyć z postawionym przede mną wyzwaniem.
            </p>
        </div>
    </div>
</div>



<?php
 echo $subject_div_gen->put_subject_div("Analiza matematyczna I", "prof. dr hab. Paweł Krupski",
     "Podczas kursu \"Analiza matematyczna I\" powtórzyłem sobie rachunek różniczkowy, który uprzednio poznałem w liceum.
                Dowiedziałem się czym jest całka oraz jak obliczyć ten matematyczny \"twór\" mając zadaną dowolną funkcję.",
     "Myślę, że warto byłoby poszerzyć swoją wiedzę o teorię funkcji zespolonych.");
 echo $mathjax_gen->put_mathjax_div("Celem tego kursu było właściwe zrozumienie tego wzoru, który jest podstawą analizy matematycznej",
     "\\frac{d}{dx} \\int\\limits_{a}^{x} f(t) dt = f(x)");

 echo $subject_div_gen->put_subject_div("Algebra z geometrią analtyczną", "Prowadzący: prof. dr hab. Jacek Cichoń",
     "Podczas tego kursu dowiedziałem się czym jest teoria grup, powtórzyłem i rozszerzyłem swoje wiadomości na temat liczb zespolonych
                i wielomianów oraz dowiedziałem się czym są macierze.",
     "Profesor Cichoń często wspominał o zastosowaniu algebry w grafice komputerowej. Myślę, że jest to ciekawy temat do studiowania.");
 echo  $mathjax_gen->put_mathjax_div("Głównym celem, wykładu było zrozumienie tego oto fundamentalnego dla algrby wzory: ",
     "dim(ker(\\Phi)) + dim(rng(\\Phi)) = dim(dom(\\Phi))");

 echo $subject_div_gen->put_subject_div("Logika i struktury formaln", "dr hab. Szymon Żeberski",
     "Doktor Żeberski wprowadził nas w świat logiki matematycznej, teorii mnogości oraz poopowiadł trochę czym jest teoria modeli.",
     "Dosyć ciekawą dziedziną matematyki wydały mi się struktury formalne, czyli wspomniana teoria modeli. Warto by o tym trochę poczytać.");
 //TODO: Dodać najważniejszy wzór wykładu [AM1]

 echo $subject_div_gen->put_subject_div("Wstęp do informatyki i programowania", "dr Przemysław Kobylański",
     "Dla mnie był to kurs, na którym mogłem powtórzyć swoją wiedzę na temat języka C i algorytmów nabytą w szkole średniej. A poza tym,
                gdyby na czyjś dom spadł samolot, to na pewno nie byłby oprogramowany w Adzie...",
     "Język C to naprawdę ciekawe zjawisko. Daje programiście dużo swobody i pozwala na robienie momentami
                niesamowitych rzeczy ze swoim komputerem. Warto by się tym zająć...");
echo $page_gen->gen_end();
?>
