<a aria-label="Link Title" title="Link Title" class="hangout-card-box" 
href="hangout/<?php echo $hangout_type; ?>-detail.php">
  <div class="hangout-card-thumb flex_ori thumb-loading">
    <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo $hangout_type; ?>-<?php echo rand(1,10); ?>.jpg" />
  </div>
  <div class="hangout-card-info">
    <h2 class="hangout-card-title">
      <?php if($hangout_type == 'artist') { ?>
        <?php echo $random_author[array_rand($random_author)]; ?>
      <?php } ?>
      <?php if($hangout_type == 'event') { ?>
        <?php echo $random_event[array_rand($random_event)]; ?>
      <?php } ?>
    </h2>
    <?php if($hangout_type == 'event') { ?>
      <div class="hangout-card-date">00 Jan 0000 - 00 Feb 0000</div>
      <div class="hangout-card-location"><?php echo $random_location[array_rand($random_location)]; ?></div>
    <?php } ?>
  </div>
</a>