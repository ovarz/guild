<a aria-label="Officer" title="Officer" class="officer-box officer-<?php echo $box_type; ?>" href="officer/detail.php">
  <div class="officer-thumb flex_ori thumb-loading">
    <img alt="img_title" class="lazyload" data-original="img/sample/officer-<?php echo rand(1,6); ?>.jpg">
  </div>
  <div class="officer-info content_center">
    <span>
      <h3 class="officer-name"><?php echo $random_name[array_rand($random_name)]; ?></h3>
      <div class="officer-birth">January 00th</div>
      <div class="officer-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
      <button class="officer-more">
        <span>Detail</span>
        <svg class="svgicon svgicon-detail" width="12" height="12" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
      </button>
    </span>
  </div>
</a>