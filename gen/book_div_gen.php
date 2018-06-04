<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-11
 * Time: 22:05
 */

$DIV =<<<EOT
    <div class="col-2-6 background-color-2 text-on-background">
        <div class="book">
            <h2 class="roboto-font">{{TITLE}}</h2>
            <p class="annotation lato-font">{{TYPE}}</p>
            <h3 class="lato-font">Autor: {{AUTHOR}}</h3>
        </div>
    </div>
EOT;

class book_div_gen {

    public function __construct() {
    }

    public function put_book_div ($title, $type, $author) {
        global $DIV;

        $div_str = str_replace(["{{TITLE}}", "{{TYPE}}", "{{AUTHOR}}"], [$title, $type, $author], $DIV);
        return $div_str;
    }

}
