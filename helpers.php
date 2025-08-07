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

   $loadViews = basePath("views/{$name}.view.php");
   if(file_exists( $loadViews )) {
      require_once($loadViews);
   }else{
      echo "<div style='color:red;padding:0;margin:0;font-size:18px;text-align:center;'>'View { $loadViews } File didnt exists '</div>";
   }
 }
 
 /**
 * load a partial
 * @param string $name
 * @return void
 */

 function loadPartial($name) {

   $loadPartial = basePath("views/partial/{$name}.php");

   if(file_exists( $loadPartial )) {
      require_once($loadPartial);
   }else{
      echo "<div style='color:red;padding:0;margin:0;font-size:18px;text-align:center;'>'View { $loadPartial } File didnt exists '</div>";
   }
 }


 /**
  * inspect value(s)
  * @param mixed $values
  * @return void
  */

  function inspectIssue( $value ) {
   ?>
      <pre><?php var_dump( $value ) ?></pre>
   <?php
  }

 /**
  * inspect value(s) and die
  * @param mixed $values
  * @return void
  */

  function inspectIssueDie( $value ) {
   ?>
      <pre>
          <?php print_r( $value ) ?>
      </pre>
   <?php
   die();
  }
