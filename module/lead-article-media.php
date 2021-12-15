<div class="lead-article-media">
  <div class="flex_ori thumb-loading">
    <?php if($lai_lazyload == 'no') { ?>
    <picture>
      <source media="(min-width:568px)" srcset="img/sample/<?php echo $main_image; ?>.jpg">
      <source media="(min-width:320px)" srcset="img/sample/mini<?php echo $main_image; ?>.webp" type="image/webp">
      <source media="(min-width:320px)" srcset="img/sample/mini<?php echo $main_image; ?>.jpg">
      <img alt="img_title" src="img/sample/<?php echo $main_image; ?>.jpg">
    </picture>
    <?php } ?>
    <?php if($lai_lazyload == 'yes') { ?>
    <img alt="img_title" class="lazyload" data-original="img/sample/<?php echo $main_image; ?>.jpg" />
    <?php } ?>
    <div class="acp-by content_center">Foto : Instagram/<?php echo $random_author[array_rand($random_author)]; ?></div>
  </div>
</div>