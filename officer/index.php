<?php 
  $page='channel'; 
  $channel='officer'; 
  $login='no'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['GUILD'].'inc/datasample.php')?>
<?php require ($_SERVER['GUILD'].'inc/meta.php')?>
<?php require ($_SERVER['GUILD'].'inc/header.php')?>

<div class="site-container">
  <span>
    <div class="main-container main-container-split">
      <div class="column-big">
        <div class="column-big-container">
        
          <section class="base-container officers">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Officers</div>
            </div>
            <div class="officers-list">
              <?php for ($i=1; $i <= 6 ; $i++) { ?>
                <?php $box_type='card'; require ($_SERVER['GUILD'].'module/officers-list.php')?>
              <?php } ?>
            </div>
          </section>
          
        </div>
      </div>
      
      <?php require ($_SERVER['GUILD'].'inc/sidebar.php')?>
    </div>
  </span>
</div>

<?php require ($_SERVER['GUILD'].'inc/menu-bottom.php')?>
<?php require ($_SERVER['GUILD'].'inc/footer.php')?>