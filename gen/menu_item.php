<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-06
 * Time: 14:16
 */

class menu_item {
    private $name = "";
    private $link = "";

    public function __construct($name, $link){
        $this->name = $name;
        $this->link = $link;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_link() {
        return $this->link;
    }
}