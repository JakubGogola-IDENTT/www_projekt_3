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

$title = "Edukacja";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["style.css", "grid.css", "reset.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$return_items[] = new return_item("Strona główna", "index.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items);

echo $page_gen->gen_begin();
?>
<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Moje przygody z edukacją to całkiem ciekawa opowieść. Pochodzę i mieszkam w Oławie, mieście leżącym niedaleko Wrocławia.
                Tam chodziłem do szkoły średniej - Liceum Ogólnokształącego nr 1 im. Jana III Sobieskiego.
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6-6">
        <div class="menu">
            <div class="menu-header roboto-font">
                Szkoła średnia
            </div>
            <p class="menu-info lato-font">
                Liceum Ogólnokształcące nr 1 im. Jana III Sobieskiego w Oławie
            </p>
            <ul class="lato-font">
                <li><a href="lo.php">Szkoła średnia</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Po uzyskaniu wykształcenia średniego rozpocząłem swoją przygodę z Politechniką Wrocławską na kierunku informatyka na Wydziale Podstawowych Problemów Techniki.
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6-6">
        <nav class="menu">
            <div class="menu-header roboto-font">
                Szkoła wyższa
            </div>
            <p class="menu-info lato-font">
                Politechnika Wrocławska
            </p>
            <ul class="lato-font">
                <li><a href="sem1.php">Semestr I</a></li>
                <li><a href="sem2.php">Semestr II</a></li>
                <li><a href="sem3.php">Semestr III</a></li>
                <li><a href="sem4.php">Semestr IV</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
