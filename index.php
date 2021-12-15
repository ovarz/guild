<?php 
  $page='home'; 
  $kanal='home'; 
  $login='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['GUILD'].'inc/datasample.php')?>
<?php require ($_SERVER['GUILD'].'inc/meta.php')?>
<?php require ($_SERVER['GUILD'].'inc/header.php')?>

<?php require ($_SERVER['GUILD'].'module/cover.php')?>

<div class="site-container">
  <span>
    <div class="main-container main-container-split">
      <div class="column-big">
        <div class="column-big-container">
        
          <section class="base-container about">
            <div id="about"></div>
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">About Us</div>
            </div>
            
            
          </section>
        
        
        
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
            <div class="see-more">
              <a aria-label="See More" title="See More" class="see-more-link" href="officers/">
                <span>See More</span>
                <svg class="svgicon svgicon-see-more" width="13" height="12" viewBox="0 0 13 12"><path d="M5.29602 1.71004L9.62102 6.00004L5.29602 10.29L6.70402 11.71L12.461 6.00004L6.70402 0.290039L5.29602 1.71004Z"/><path d="M1.70402 0.290039L0.296021 1.71004L4.62102 6.00004L0.296021 10.29L1.70402 11.71L7.46102 6.00004L1.70402 0.290039Z"/></svg>
              </a>
            </div>
          </section>
        
        
        
          <section class="base-container member">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Members</div>
            </div>
            
            
          </section>
        
        
        
          <section class="base-container gallery">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Gallery</div>
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