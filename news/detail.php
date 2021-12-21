<?php 
  $page='detail'; 
  $channel='news'; 
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
              <h1 class="dti-title">FINAL FANTASY XIV: Endwalker Event!</h1>
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
              <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
              <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
              <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
              <div class="detail-content-image flex_ori thumb-loading">
                <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,10); ?>.jpg">
              </div>
              <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
            </main>
            <?php require ($_SERVER['GUILD'].'module/tag-list.php')?>
          </section>
        
        
        
          <section class="base-container news">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <h1 class="section-title-label">Related Article</h1>
            </div>
            <div class="news-list">
              <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <?php $channel_link='news'; require ($_SERVER['GUILD'].'module/news-list.php')?>
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