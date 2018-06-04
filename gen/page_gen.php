<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-05
 * Time: 18:10
 */
require_once(__DIR__."/menu_item.php");
require_once(__DIR__."/return_item.php");

$HEAD =<<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>{{TITLE}}</title>
<meta name="description" content="{{CONTENT}}">
<meta name="author" content="{{AUTHOR}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{STYLES}}
{{FONTS}}
</head>\n
EOT;

$HEADER =<<<EOT
<header class="roboto-font background-color-1">{{TITLE}}</header>\n
EOT;

$FOOTER =<<<EOT
<footer class="background-color-3 text-on-background lato-font">
Copyright: {{AUTHOR}} {{YEAR}}
</footer>\n
EOT;

$MENU =<<<EOT
<div class="row background-color-1">
<div class="col-6-6">
<nav class="menu">
<ul class="lato-font">
{{ITEMS}}
</ul>
</nav>
</div>
</div>
EOT;

$MENU_ITEM =<<<EOT
<li><a href="{{LINK}}">{{NAME}}</a></li>
EOT;

$RETURN =<<<EOT
<div class="container">
<nav class="return">
<ul  class="roboto-font">
>>> {{TRACE}}
</ul>
</nav>
</div>
EOT;

$RETURN_ITEM =<<<EOT
<li><a href="{{LINK}}"> {{NAME}}</a> > </li>
EOT;
class page_gen {

    private $title = "";
    private $content = "";
    private $author = "";
    private $styles = [];
    private $fonts = [];
    private $scripts = [];
    private $menu_items = [];
    private $return_items = [];

    public function __construct($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->styles = $styles;
        $this->fonts = $fonts;
        $this->scripts = $scripts;

        $this->menu_items = $menu_items;
        $this->return_items = $return_items;
    }

    public function gen_begin () {
        global $HEAD;
        $begin_str = str_replace(["{{TITLE}}", "{{CONTENT}}", "{{AUTHOR}}"], [$this->title, $this->content, $this->author], $HEAD);

        $styles_str = "";
        foreach ($this->styles as $s) {
            $styles_str .= $this->add_style($s);
        }
        $begin_str = str_replace("{{STYLES}}", $styles_str, $begin_str);

        $fonts_str = "";
        foreach ($this->fonts as $f) {
            $fonts_str .= $this->add_font($f);
        }
        $begin_str = str_replace("{{FONTS}}", $fonts_str, $begin_str);

        $begin_str .= "<body>\n";

        $begin_str .= $this->put_header();
        $begin_str .= $this->put_menu();
        return $begin_str;
    }

    public function gen_end () {
        global $FOOTER;
        $end_str = $this->put_return();
        $end_str .= str_replace(["{{AUTHOR}}", "{{YEAR}}"], [$this->author, date("Y")], $FOOTER);

        $end_str .= "</body>\n";
        $end_str .= "</html>\n";
        return $end_str;
    }

    private function put_header () {
        global $HEADER;
        $header_str = str_replace("{{TITLE}}", $this->title, $HEADER);
        return $header_str;
    }

    private function put_menu () {
        global $MENU, $MENU_ITEM;
        $items_str = "";
        foreach ($this->menu_items as $m) {
            $items_str .= str_replace(["{{LINK}}", "{{NAME}}"], [$m->get_link(), $m->get_name()], $MENU_ITEM) . "\n";
        }
        $menu_str = str_replace("{{ITEMS}}", $items_str, $MENU);
        return $menu_str;
    }

    private function put_return () {
        global $RETURN, $RETURN_ITEM;
        $items_str ="";

        if ($this->return_items === []) {
            return "";
        } else {
            foreach ($this->return_items as $r) {
                $r = (object) $r;
                $items_str .= str_replace(["{{LINK}}", "{{NAME}}"], [$r->get_link(), $r->get_name()], $RETURN_ITEM);
            }
            $items_str .= "<li><p>$this->title</p></li>";
            $return_str = str_replace("{{TRACE}}", $items_str, $RETURN);
            return $return_str;
        }
    }

    private function add_style ($style_name) {
        return "<link rel=\"stylesheet\" href=\"". $style_name ."\">\n";
    }

    private function add_font ($font_name) {
        return "<link href=\"". $font_name ."\" rel=\"stylesheet\">\n";
    }

    private function add_script () {
        
    }

    private function add_attributes ($attributes) {
        $attrib_str = "";

        foreach ($attributes as $a) {
            $attrib_str .= $a . " ";
        }

        return $attrib_str;
    }
}