<?php 
  $page='channel'; 
  $channel='member'; 
  $login='no'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['GUILD'].'inc/datasample.php')?>
<?php require ($_SERVER['GUILD'].'inc/meta.php')?>
<?php require ($_SERVER['GUILD'].'inc/header.php')?>

<div class="site-container">
  <span>
    <div class="main-container">
      <div class="column-big">
        <div class="column-big-container">
        
          <section class="base-container member">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Members</div>
            </div>
            <div class="member-list">
              <?php for ($i=1; $i <= 30 ; $i++) { ?>
                <?php require ($_SERVER['GUILD'].'module/member-list.php')?>
              <?php } ?>
            </div>
            <?php require ($_SERVER['GUILD'].'module/now-loading.php')?>
          </section>
          
        </div>
      </div>
    </div>
  </span>
</div>

<?php require ($_SERVER['GUILD'].'inc/menu-bottom.php')?>
<?php require ($_SERVER['GUILD'].'inc/footer.php')?>