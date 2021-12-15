<a aria-label="Link Title" title="Link Title" class="article-list-row" href="<?php echo $kanal_link; ?>/detail.php">
  <div class="article-list-info">
    <span>
	  <h2 class="article-list-title"><?php echo $random_title[array_rand($random_title)]; ?></h2>
      <?php if($show_kanal == 'yes') { ?>
        <h3 class="article-list-kanal"><?php echo $random_kanal[array_rand($random_kanal)]; ?></h3>
      <?php } ?>
      <div class="article-list-date">
        <?php if($dateformat == 'ago') { ?>1 menit yang lalu<?php } ?>
        <?php if($dateformat == 'min') { ?>00 Jan 0000<?php } ?>
        <?php if($dateformat == 'full') { ?>00 Jan 0000 - 00:00 WIB<?php } ?>
      </div>
	</span>
  </div>
  
  <div class="article-list-thumb">
    <div class="article-list-thumb-frame flex_ori thumb-loading">
      <?php if($image_size == 'normal') { ?>
        <img alt="img_title" class="lazyload" data-original="img/sample/minisample-<?php echo rand(1,20); ?>.jpg" />
      <?php } ?>
      <?php if($image_size == 'big') { ?>
        <img alt="img_title" class="lazyload" data-original="img/sample/minisample-<?php echo rand(1,20); ?>.jpg"
        data-srcset="img/sample/minisample-<?php echo rand(1,20); ?>.jpg 640w, img/sample/sample-<?php echo rand(1,20); ?>.jpg 1920w" />
      <?php } ?>
    </div>
  </div>
</a>