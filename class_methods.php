<?php

class Cars {
    function greeting() {

    }

    function greeting2() {

    }
}

$the_method = get_class_methods('Cars');

foreach ($the_method as $item) {
    echo $item. '<br/>';

}
