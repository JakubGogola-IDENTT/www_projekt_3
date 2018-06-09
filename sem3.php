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

$title = "Semestr III";
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
                Na trzecim semestrze czekało nas wyzwanie w postaci kursu Architektura komputerów i systemy operacyjne.
            </p>
        </div>
    </div>
</div>

<?php
echo $subject_div_gen->put_subject_div("Architektura komputerów i systemy operacyjne", "dr inż. Marcin Zawada",
    "Ten kurs był naprawdę bardzo, bardzo prosty! A tak na poważnie to ogrom wiedzy o tym, jak działa komputer
                oraz \"Wszystko co chciałeś wiedzieć o Linuxie, ale wstydziłeś się zapytać\".",
    "Linux, Linux i jeszcze raz Linux! Warto pogłębiać swoją wiedzę na temat tego OS, bo to podstawowe narzędzie wykorzystywane
                obecnie w wielu miejscach pracy.");

echo $subject_div_gen->put_subject_div("Technologia programowania", "dr inż. Jakub Lemiesz",
    "Z tego przedmiotu wyniosłem bardzo przydatną i użyteczną wiedzę. Była to kontynuacja nauki Javy.
                Dowiedziałem się jak w poprawny sposób korzystać z IDE, jak korzystać z wzorców projektowych i do czego służą repozytoria.
                Miałem też okazję sprawdzić swoje umiejętności podczas implementacji gry trylma, którą realizowaliśmy w dwuosobowych
                zespołach.",
    "Pod koniec kursu poopowiadaliśmy sobie trochę o frameworkach: Akka, Play i Spring, jednych z podstawowych narzędzi dzisiejszego
                programisty Javy. Mam zamiar poszerzyć swoją wiedzę i poćwiczyć pracę z tymi narzędziami.");

echo $subject_div_gen->put_subject_div("Metody probabilistyczne i statystyka", "dr Małgorzata Kuchta",
    "Wprowadzenie do rachunku prawdopodobieństwa z elementami statystyki. Niezwykle ważna wiedza na kursie
                Algorytmy i struktury danych, który realizujemy podczas trwania IV semestru.",
    "Warto poszerzyć swoją wiedzę odnośnie staystyki, która przyda się przy nauce machine learning.");
echo $mathjax_gen->put_mathjax_div("Najważniejszy kurs tego wykłądu to ten dotyczący wartości oczekiwanej: ",
    "E(X) = \\int_{\\Omega} X(\\omega) dP(\\omega)");

echo $subject_div_gen->put_subject_div("Bazy danych i systemy informacyjne", "dr inż. Piotr Syga",
    "Nauka o budowie baz danych oraz wykorzystaniu języka zapytań SQL. Pod koniec kursu mieliśmy za zadanie zaprojektować
                i zaprogramować aplikację, która korzysta z bazy danych.",
    "Chciałbym dowiedzieć się nieco więcej o bazach danych typu noSQL.");

echo $page_gen->gen_end();
?>
