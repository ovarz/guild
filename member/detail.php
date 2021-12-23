<?php 
  $page='detail'; 
  $channel='member'; 
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
        
          <section class="base-container detail-profile">
            <div class="detail-profile-thumb dpt-<?php echo $channel; ?> content_center">
              <div class="dpt-circle">
                <div class="dpt-inside flex_ori thumb-loading">
                  <img alt="img_title" class="lazyload" data-original="img/sample/<?php echo $channel; ?>-1.jpg">
                </div>
              </div>
            </div>
            <div class="detail-profile-info">
              <h1 class="dpi-name">Enkidu Araimin</h1>
              <h2 class="dpi-date">May 22nd</h2>
            </div>
          </section>
          
          
        
          <section class="base-container detail-content">
            <main>
              <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
            </main>
            <?php require ($_SERVER['GUILD'].'module/tag-list.php')?>
          </section>
        
        
        
          <section class="base-container officers">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Other <?php echo $channel; ?></div>
            </div>
            <div class="officers-list">
              <?php for ($i=1; $i <= 4 ; $i++) { ?>
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