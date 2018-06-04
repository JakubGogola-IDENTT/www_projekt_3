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

$title = "Semestr IV";
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

echo $page_gen->gen_begin();
?>

<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Czwarty semestr zaczął się niedawno. Trzeba szykować się na sporo wytężonej pracy, ale też na zdobycie nowej, niezwykle
                przydatnej wiedzy. Poniżej możesz przeczytać czego nauczyłem się do tej pory i jakie mam oczekiwania po tym semestrze.
            </p>
        </div>
    </div>
</div>

<?php
echo $subject_div_gen->put_subject_div("Algorytmy i struktury danych", "dr inż. Zbigniew Gołębiewski",
    "Poznałem notację asymptotyczną. Zaznajomiłem się z podstawowymi algorytmami sortowania oraz ich złożonością obliczeniową.
                Obecnie na kursie zajmujemy się tematem drzew binarnych.",
    "Rzeczą, która szczególnie będzie mnie interesować podczas kursu, będą na pewno algorytmy zrandomizowane. Po zakończeniu
                kursu mam zamiar nadal zgłębiać swoją wiedzę z zakresu algorytmiki, gdyż wiążę z tą dziedziną informatyki swoje studia
                II stopnia.");
echo $subject_div_gen->put_subject_div("Wprowadzenie do teorii grafów", "prof. dr hab. Michał Morayne",
    "Nauczyłem się podstawowych pojęć, którymi operuje się badając grafy. Obecnie zajmujemy się tematyką grafów eulerowskich.",
    "Chciałbym dowiedzieć się więcej o praktycznym zastosowaniu grafów w informatyce oraz jak takie problemy, wykorzystujace grafy,
                rozwiązuje się za pomocą odpowiednich narzędzi (języków programowania).");
echo $subject_div_gen->put_subject_div("Technologie sieciowe", "dr inż. Łukasz Krzywiecki",
    "Powtórzyłem i utrwaliłem znane dotychczas widomości o sieciach. Nauczyłem się korzystać z podstawowych programów takich
                jak Ping czy Traceroute. Dowiedziałem się jak opisywać i modelować przepływ danych w sieci za pomocą grafów.",
    "W jaki sposób przesyłane są dane w sieci WWW oraz jak wygląda serwerownia Katedry Informatyki WPPT.");
echo $subject_div_gen->put_subject_div("Nowoczesne technologie WWWW", "prof. dr hab. Jacek Cichoń",
    "Poznałem podstawowe znaczniki HTML5 i CSS3. Dowiedziałem się trochę na temat teorii kolorów i w jaki sposób z nich
                korzystać na budowanych stronach. Poznałem podstawowe zasady, którymi rządzi się design stron WWWW. Zacząłem również
                naukę języka JavaScript.",
    "W jaki sposób wykorzystywać frameworki takie jak Bootstrap, Foundation czy Django.");
echo $subject_div_gen->put_subject_div("Grafika komputerowa i wizualizacja", "dr Marcin Kik",
    "Poznałem podstawy obsługi WebGL z wykorzystaniem języka JavaScript. Nauczyłem się tworzyć prostą grafikę
                w technologii Canvas.",
    "Oprócz WebGL chciałbym nauczyć się także najnowszego OpenGL, który jest nieco bardziej skomplikowany od swojego
                webowego odpowiednika.");
?>

<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Oprócz tych kursów, realizuję obecnie jeszcze dwa kursy humanistyczne: "Podstawy negocjacji" prowadzone przez
                mgr Mariannę Zacharewicz i "Przedsiębiorczość" prowadzoną przez dr Aldonę Dereń.
            </p>
            <p class="lato-font">
                W tym semestrze mieliśmy do wyboru 5 kursów wybieralnych. Oprócz tych, na które ja się zapisałem, miałem do wyboru jeszcze dwa inne,
                którymi były: "Programowanie w logice", prowadzone przez dr Przemysława Kobylańskiego, i "Wprowadzenie do funkcji zespolonych", prowadzone
                przez prof. dr hab. Michała Morayne.
            </p>
        </div>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
