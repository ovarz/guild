<style><?php require ($_SERVER['GUILD'].'css/headline.css')?></style>
<section class="base-container headline">
  <div class="headline-big">
    <?php if($page != 'home') { ?>
      <h1 class="headline-kanal"><?php echo $kanal; ?></h1>
    <?php } ?>
    <?php $image_size='big'; require ($_SERVER['GUILD'].'module/article-list-random.php')?>
  </div>
  <?php require ($_SERVER['GUILD'].'iklan/iklan-top-mobile.php')?>
  <div class="headline-small">
    <div class="headline-small-container">
      <?php for ($i=1; $i <= 4 ; $i++) { ?>
        <?php $image_size='normal'; require ($_SERVER['GUILD'].'module/article-list-random.php')?>
      <?php } ?>
    </div>
  </div>
</section>