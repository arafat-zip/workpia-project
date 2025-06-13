<?php

/**
 * get the base path
 * @param string $path
 * @return string
 */

 function basePath($path = '') {
    return __DIR__ . '/' . $path;

 }

//  var_dump(basePath());
//  die();

/**
 * load a view
 * @param string $name
 * @return void
 */

 function loadView($name) {

   require_once("views/{$name}.view.php");
 }

