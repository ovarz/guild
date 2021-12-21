<?php 
  $page='channel'; 
  $channel='guide'; 
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
        
        
        
          <section class="base-container news">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <h1 class="section-title-label"><?php echo $channel; ?></h1>
            </div>
            <div class="news-list">
              <?php for ($i=1; $i <= 10 ; $i++) { ?>
                <?php $channel_link='guide'; require ($_SERVER['GUILD'].'module/news-list.php')?>
              <?php } ?>
            </div>
            <?php require ($_SERVER['GUILD'].'module/now-loading.php')?>
          </section>
          
        </div>
      </div>
      
      <?php require ($_SERVER['GUILD'].'inc/sidebar.php')?>
    </div>
  </span>
</div>

<?php require ($_SERVER['GUILD'].'inc/menu-bottom.php')?>
<?php require ($_SERVER['GUILD'].'inc/footer.php')?>