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

$title = "Szkoła średnia";
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

echo $page_gen->gen_begin();
?>
<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Szkoła średnia to jedne z najlepszych lat mojego życia. Do dzisiaj miło wspominam czas spędzony w moim liceum.
                Chodziłem do klasy o profilu matematyczno - fizyczno - informatycznym. O ile za fizyką nie przepadałem, to od razu
                zakochałem się w przedmiotach jakimi były matematyka i informatyka. Miałem naprawdę wymagających nauczycieli.
                Nie raz zdarzało mi się narzekać na nadmiar pracy, ale dzisiaj widzę, że ciężka praca przez trzy lata uczęszczania
                do tamtej szkoły przynosi dzisiaj swoje efekty. Nie mam teraz problemów z nauką, a wiedza zdobyta na poprzednim
                szczeblu edukacji dała mi łatwy i bezstresowy start na studiach.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Liceum Ogólnokształcące nr I im. Jana III Sobieskiego w Oławie</h2>
            <h3 class="roboto-font">Rocznik 2013 - 2016</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6-6">
            <img src="images/lo/absolwenci.jpg" alt="error">
        </div>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
