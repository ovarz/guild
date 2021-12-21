<?php 
  $page='detail'; 
  $channel='photo'; 
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
        
          <section class="base-container detail-top">
            <div class="detail-top-info">
              <h1 class="dti-title">FINAL FANTASY XIV: Endwalker Photo!</h1>
              <div class="dti-catedate">
                <a aria-label="News" title="News" class="dti-cate" href="<?php echo $channel; ?>"><?php echo $channel; ?></a>
                <div class="dti-date">Sunday, 00 January 0000</div>
              </div>
            </div>
            <div class="detail-top-image thumb-loading">
              <picture>
                <source media="(min-width:568px)" srcset="img/sample/sample-1.jpg">
                <source media="(min-width:320px)" srcset="img/sample/sample-1.webp" type="image/webp">
                <source media="(min-width:320px)" srcset="img/sample/sample-1.jpg">
                <img alt="img_title" src="img/sample/sample-1.jpg">
              </picture>
            </div>
          </section>
          
          
        
          <section class="base-container detail-content">
            <main>
              <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
            </main>
            <?php require ($_SERVER['GUILD'].'module/tag-list.php')?>
          </section>
        
        
        
          <section class="base-container gallery">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">More <?php echo $channel; ?></div>
            </div>
            <div class="gallery-list">
              <?php for ($i=1; $i <= 12 ; $i++) { ?>
                <?php $media_type='photo'; require ($_SERVER['GUILD'].'module/gallery-list.php')?>
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