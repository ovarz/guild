<nav class="menu-bottom mobile-only <?php if($kanal == 'home') { ?>bg-transparent<?php } ?>">
  <?php $menu_bottom='yes'; require ($_SERVER['GUILD'].'inc/menu-main.php')?>
</nav>

<menu id="popup-Menu" class="popup-box popup-menu mobile-only">
  <?php $menu_bottom='no'; require ($_SERVER['GUILD'].'inc/menu-main.php')?>
</menu>