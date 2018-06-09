<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-06-04
 * Time: 11:03
 */

$MATHJAX_ITEM =<<<EOT
$$
    {{EXPR}}
$$
EOT;

$MATHJAX_DIV =<<<EOT
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <p class="lato-font">
                {{DESC}}
            </p>
        </div>
        <div class="col-3-6">
        <h3>
        $$
            {{EXPR}}
        $$
        </h3>
        </div>
    </div>
</div>
EOT;

$MATHJAX_DESC =<<<EOT
<p class="lato-font">
    {{DESC}}
<p>
EOT;




class mathjax_item {

    public function __construct() {

    }

    public function put_item($expr) {
        global $MATHJAX_ITEM;

        $item = str_replace("{{EXPR}}", $expr, $MATHJAX_ITEM);
        return $item;
    }

    public function put_mathjax_div ($desc, $expr) {
        global $MATHJAX_DIV, $MATHJAX_DESC;
        if ($desc != "") {
            $tmp = str_replace("{{DESC}}", $desc, $MATHJAX_DESC);
            $desc = $tmp;
        }

        $div = str_replace(["{{DESC}}", "{{EXPR}}"], [$desc, $expr], $MATHJAX_DIV);
        return $div;
    }

}