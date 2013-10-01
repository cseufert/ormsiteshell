<?php

/**
 * Master Controller
 *
 * @author Chris
 */
class ossControl {
  static function render() {
    if(!isset($_REQUEST['page']))
      $page = modelPage::find (orm::eq('pageid',0));
    else
      $page = modelPage::find(orm::eq('pageid',$_REQUEST['page']));
    //var_dump($page->content);
    $h = new hamle($page, new ossHamleSetup());
    echo $h->outputFile("index.hamle");
  }
}
