<article class="news-row">
  <div class="news-row-thumb">
    <a aria-label="News" title="News" class="nrt-box flex_ori thumb-loading" href="news/detail.php">
      <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,10); ?>.jpg">
    </a>
  </div>
  <div class="news-row-info">
    <span>
      <a aria-label="News" title="News" class="nri-title" href="news/detail.php">
        <?php echo $random_summary[array_rand($random_summary)]; ?>
      </a>
      <div class="nri-date">Sunday, 00 January 0000</div>
      <div class="nri-desc desktop-only"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
    </span>
  </div>
  <?php require ($_SERVER['GUILD'].'module/user-action.php')?>
</article>