<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-06
 * Time: 14:01
 */

require_once(__DIR__ . "/gen/page_gen.php");
require_once (__DIR__."/gen/book_div_gen.php");


$title = "Hobby";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["css/style.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$return_items[] = new return_item("Strona główna", "index.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items);
$book_div_gen = new book_div_gen();

echo $page_gen->gen_begin();
?>


<div class="container">
    <div class="row">
        <div class="col-2-6">
            <img src="images/author.jpg" alt="error" class="hobby-author-photo">
        </div>
        <div class="col-4-6">
            <p class="lato-font">
                Posiadam wiele zainteresowań, ale moje dwie ulubione rzeczy to czytanie książek fantasy i fotografia. Poniżej znajdziesz
                kilka moich ulubionych książek (lub ich serii) i parę moich zdjęć. Oprócz tego, co możesz tutaj obejrzeć i przeczytać,
                lubię jeździć na rowerze, pływać i chodzić po górach. Szczególnie podczas wykonywania tej ostatniej czynności, zdarza mi się
                uchwycić wiele niesamowitych kadrów. Niestety, ostatnio mam co raz mniej czasu na oddawanie się moim pasjom, ale staram się
                poświęcać im każdą dostępną chwilę wolnego czasu.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- J. Grzędowicz (powieści) -->
        <?php
            $author = "Jarosław Grzędowicz";
            echo $book_div_gen->put_book_div("Pan Lodowego Ogrodu", $author, "seria");
            echo $book_div_gen->put_book_div("Popiół i kurz", $author, "powieść");
            echo $book_div_gen->put_book_div("Hel 3", $author, "powieść");
        ?>
    </div>
    <!-- J. Grzędowicz (zbiory opowiadań) -->
    <div class="row">
        <?php
            $type = "zbiór opowiadań";
            echo $book_div_gen->put_book_div("Księga Jesiennych Demonów", $author, $type);
            echo $book_div_gen->put_book_div("Wypychacz zwierząt", $author, $type);
            echo $book_div_gen->put_book_div("Azyl", $author, $type);
        ?>
    </div>

    <!-- Inne -->
    <div class="row">
        <?php
            echo $book_div_gen->put_book_div("Kroniki Czarnej Kompani", "Glen Cook", "seria");
            echo $book_div_gen->put_book_div("Gra o tron", "George R. R. Martin", "seria");
            echo $book_div_gen->put_book_div("Wykłady ze Wstępu do Matematyki", "J. Cichoń", "skrypt");
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Tutaj kilka popełnionych przeze mnie zdjęć.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div id="img1" class="col-3-6">
        </div>
        <div id="img2" class="col-3-6">
        </div>
    </div>
    <div class="row">
        <div id="img3" class="col-3-6">
        </div>
        <div id="img4" class="col-3-6">
        </div>
    </div>
</div>

<script src="image-promise.js"></script>

<?php
echo $page_gen->gen_end();
?>
