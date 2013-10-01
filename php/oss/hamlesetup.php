<?php

/**
 * Description of hamlesetup
 *
 * @author Chris
 */
class ossHamleSetup extends hamleSetup {
  function getCacheDir() {
    return __DIR__."/../../cache";
  }
  function themePath($f) {
    return __DIR__."/../../hamle/$f";
  }
}

?>
