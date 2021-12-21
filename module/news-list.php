<article class="news-row">
  <div class="news-row-thumb">
    <a aria-label="News" title="News" class="nrt-box flex_ori thumb-loading" href="<?php echo $channel_link; ?>/detail.php">
      <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,10); ?>.jpg">
    </a>
  </div>
  <div class="news-row-info">
    <span>
      <a aria-label="News" title="News" class="nri-title" href="<?php echo $channel_link; ?>/detail.php">
        <?php echo $random_summary[array_rand($random_summary)]; ?>
      </a>
      <div class="nri-date">
        <?php if($channel_link != 'event') { ?>Sunday, 00 January 0000<?php } ?>
        <?php if($channel_link == 'event') { ?>00/00/0000 - 00:00 AM to 00:00 PM<?php } ?>
      </div>
      <?php if($channel_link == 'event') { ?>
        <div class="nri-host desktop-only">0/00 has joined</div>
      <?php } ?>
      
      <div class="nri-desc desktop-only"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
    </span>
  </div>
  <?php require ($_SERVER['GUILD'].'module/user-action.php')?>
</article>