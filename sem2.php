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
require_once  (__DIR__."/gen/mathjax_item.php");

$title = "Semestr II";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["css/style.css"];
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
                W drugim semestrze już zupełnie zadomowiłem się w nowej szkole. Nauka szła o wiele łatwiej.
            </p>
        </div>
    </div>
</div>

<?php
echo $subject_div_gen->put_subject_div("Analiza matematyczna II", "prof. dr hab. Paweł Krupski",
    "Kontynuacja kursu \"Analiza matematyczna I\". Poszerzyliśmy zasoby swojej wiedzy o funkcje wielu zmiennych.",
    "Trudno powiedzieć, zważywszy na to, że analiza raczej nie należy do moich ulubionych zagadnień.
             Osobiście wystarczy mi już chyba wrażeń związanych z tym przedmiotem.");
echo $mathjax_gen->put_mathjax_div("Najważniejszym wzorem tego wykładu był ten dotyczący zamiany zmiennych w całce: ",
    "\\int_{\\Phi(U)} f(\\vec x) d\\vec{x} = \\int_U (f\\circ \\Phi)(\\vec{u}) |\\det(\Phi'(\\vec{u}))| d\\vec{u}");

echo $subject_div_gen->put_subject_div("Algebra abstrakcyjna i kodowanie", "prof. dr hab. Jacek Cichoń",
    "Poniekąd rozszerzenie informacji z algebry z I semestru. Wprowadzenie do algorytmów szyfrującyh i teorii kodowania.",
    "Warto poczytać trochę o kryptografii, bo to bardzo ważny w dzisiejszych czasach temat, a ten kurs daje dobre podstawy
             do kontynuowania nauki w tej dziedzinie informatyki.");
echo $mathjax_gen->put_mathjax_div("Jednym z istotniejszych wzorów był ten dotyczący funkcji Eulera: ",
    "\\sum_{d|n} \\phi(d) = n~.");

echo $subject_div_gen->put_subject_div("Matematyka dyskretna", "dr hab. Szymon Żeberski",
    "Świetny kurs! Podstawy zlicznia, trochę teorii grafów, niesamowicie przydatne funkcje tworzące i trochę klas kombinatorycznych.",
    "Wiedzę z matematyki dyskretnej wykorzystuję na bieżąco, podczas wielu kursów. Trudno jednoznacznie określić czego warto się douczyć.
                Myślę, że warto po prostu na bieżąco uzupełniać swoje informacje, a także od czasu do czasu powtórzyć to, czego się wtedy nauczyliśmy.");
echo $mathjax_gen->put_mathjax_div("Dosyć przydatnym wzorem z tego kursu był wzór włączeń i wyłączeń: ",
    "\\mid  A_1 \cup A_2 \cup \dots \cup A_n \\mid = \\\\ =\\sum_{k=1}^{n} \\sum_{[A \in \\{1,2,\\dots,n \\}]^k} (-1)^{k+1} \\mid \bigcap_{i \\in A} A_i \\mid");

echo $subject_div_gen->put_subject_div("Kurs programowania", "dr inż. Wojciech Macyna",
    "Wprowadzenie w podstawy programowania w językach Java i C++.",
    "Warto nauczyć się wzorców projektowych.");
?>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="physic-style">Fizyka</h2>
            <h3 class="physic-style">Prowadzący: dr hab. inż. Włodzimierz Salejda, prof. nadzwyczajny</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="physic-style">Czego się dowiedziałem?</h2>
            <p class="physic-style">
                Podczas tego kursu dowiedziałem się, że nie warto ufać Polwro w kwestii wyobru prowadzącego ćwiczenia.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="physic-style">Czego warto się douczyć?</h2>
            <p class="physic-style">
                Wszystkiego o czym, w założeniu, miał być ten kurs.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6-6 physic-style">
            Wygląd niniejszej sekcji jest inspirowany <a href="http://www.if.pwr.wroc.pl/~wsalejda/">stroną prowadzącego.</a>
        </div>
    </div>
</div>

<?php
echo $subject_div_gen->put_subject_div("Problemy prawne informatyki", "prof. dr hab. Mirosław Kutyłowski",
    "Dowiedzieliśmy się trochę o tym, jak ciężkie jest życie informatyka i jak dużo czeka prawnych pułapek na zwykłego,
                szarego programistę.",
    "Na codzień poszerzać swoją wiedzę z prawa, bo \"nieznajomość prawa szkodzi\".");

echo $page_gen->gen_end();
?>
