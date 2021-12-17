<article class="gallery-box">
  <a aria-label="<?php echo $media_type; ?>" title="<?php echo $media_type; ?>" class="gallery-thumb flex_ori thumb-loading" href="<?php echo $media_type; ?>/detail.php">
    <img alt="img_title" class="lazyload" data-original="img/sample/member-<?php echo rand(1,20); ?>.jpg">
  </a>
  <?php require ($_SERVER['GUILD'].'module/user-action.php')?>
</article>