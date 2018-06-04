<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-11
 * Time: 22:25
 */

$DIV =<<<EOT
<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">{{NAME}}</h2>
            <h3 class="lato-font">Prowadzący: {{LECTURER}}</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                {{KNOWLEDGE}}
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                {{TOLEARN}}
            </p>
        </div>
    </div>
</div>
EOT;

class subject_div_gen {

    public function __construct() {
    }

    public function put_subject_div ($name, $lecturer, $knowledge, $to_learn) {
        global $DIV;

        $div_str = str_replace(["{{NAME}}", "{{LECTURER}}", "{{KNOWLEDGE}}", "{{TOLEARN}}"],
            [$name, $lecturer, $knowledge, $to_learn], $DIV);

        return $div_str;
    }

}