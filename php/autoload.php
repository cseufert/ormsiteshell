<?php
require_once(__DIR__."/../lib/hamle/php/autoload.php");
require_once(__DIR__."/../lib/phporm/autoload.php");

spl_autoload_register(function($class) {
  
  if(preg_match("/^([a-z0-9]+)([A-Z][a-zA-Z0-9]*)(_[a-zA-Z_]+)?$/", $class, $m)) {
    $path = __DIR__."/".$m[1]."/".strtolower($m[2]).".php";
    if(file_exists($path)) require_once($path);
  } elseif(preg_match("/^([a-z0-9]+)$/", $class, $m)) {
    $path = __DIR__."/".$m[1]."/_.php";
    if(file_exists($path)) require_once($path);
  }
});

