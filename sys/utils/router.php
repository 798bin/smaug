<?php
$router = function($url) {
    var_dump( preg_split('/[\/\\\]/', $url) );
};

