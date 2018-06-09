<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-06-09
 * Time: 19:02
 */

$DET =<<<EOT
<div class="form-row">
    $$
        {{EXPR}}
    $$
</div>
EOT;


class captcha_gen {

    private $matrix;

    public function __construct(){
        $this->matrix = [];
    }

    public function generate() {
      $this->matrix = $this->generate_matrix();
      print $this->det($this->matrix);
      return $this->det($this->matrix);
    }

    public function display() {
        global $DET;

        $str = "\\begin{vmatrix}";

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $str .= $this->matrix[$i][$j];
                $str .= "&";
            }

            if ($i != 2) {
                $str .= "\\\\";
            }
        }

        $str .= "\\end{vmatrix}";

        $result = $DET;
        $result = str_replace("{{EXPR}}", $str, $result);

        return $result;
    }

    private function generate_matrix () {
        $matrix = [];
        for ($i = 0; $i < 3; $i++) {
            $matrix[] = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];
        }
        return $matrix;
    }

    private function det($matrix) {
        return $matrix[0][0] * $matrix[1][1] * $matrix[2][2] +
            $matrix[0][1] * $matrix[1][2] * $matrix[2][0] +
            $matrix[0][2] * $matrix[1][0] * $matrix[1][2] -
            $matrix[2][0] * $matrix[1][1] * $matrix[0][2] -
            $matrix[2][1] * $matrix[1][2] * $matrix[0][0] -
            $matrix[2][2] * $matrix[1][0] * $matrix[0][1];
    }
}