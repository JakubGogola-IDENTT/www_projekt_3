<?php
require_once(__DIR__ . "/gen/page_gen.php");


$title = "Kontakt";
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
            <p class="roboto-font">
                Tak jak wspomniałem, nazywam się Kuba Gogola. Jeżeli chcesz mnie o coś spytać, to serdecznie zapraszam do skontaktowania się ze mną.
            </p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="roboto-font">
                Zazwyczaj odpisuję na e-maile w dniu ich otrzymania. Oczywistym jest jednak, że czynię to jedynie w dni robocze. Weekendy mam wolne,
                więc jeżeli coś ode mnie chcesz to odpowiedzi możesz się spodziewać pomiędzy poniedziałkiem a piątkiem. Najczęściej w środku nocy,
                bo jak przystało na rasowego studenta informatyki, rzadko zdarza mi się położyć do łóżka o ludzkiej porze. Zamiast tego wolę programować
                i odpisywać na otrzymane e-maile.
            </p>
        </div>
    </div>
</div>

<div class="banner background-color-2">
    <div class="container">
        <div class="row text-on-background">
            <div class="col-2-6">
                <h2 class="roboto-font"> Adres </h2>
                <h3 class="lato-font">Mój komputer</h3>
                <p class="code-font">
                    16-DB-30-6E-B6-B8
                </p>

            </div>
            <div class="col-4-6">
                <h2 class="roboto-font">Kontakt e-mailowy</h2>
                <p class="lato-font">
                    Serdecznie zachęcam do kontatu e-mailowego. Wysyłanie listów z adresem mojej karty sieciowej to nie jest raczej zbyt dobry pomysł.
                </p>
                <a href="mailto:236412@student.pwr.edi.pl" class="lato-font">236412@student.pwr.edu.pl</a>
            </div>
        </div>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
