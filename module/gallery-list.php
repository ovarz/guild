<article class="gallery-box">
  <a aria-label="<?php echo $media_type; ?>" title="<?php echo $media_type; ?>" class="gallery-thumb flex_ori thumb-loading" 
  href="<?php echo $media_type; ?>/detail.php">
    <img alt="img_title" class="lazyload" data-original="img/sample/member-<?php echo rand(1,20); ?>.jpg">
    <div class="gallery-icon content_center">
      <?php if($media_type == 'photo') { ?>
      <svg class="svgicon svgicon-photo" width="16" height="16" viewBox="0 0 42 42"><path d="M31.272 9.79994L22.12 0.679944C21.8212 0.378713 21.415 0.20848 20.9907 0.206679C20.5665 0.204879 20.1589 0.37166 19.8576 0.670344L19.848 0.679944L10.728 9.79994H1.79995C1.3756 9.79994 0.968639 9.96851 0.66858 10.2686C0.368522 10.5686 0.199951 10.9756 0.199951 11.3999V40.1999C0.199951 40.6243 0.368522 41.0313 0.66858 41.3313C0.968639 41.6314 1.3756 41.7999 1.79995 41.7999H40.2C40.6243 41.7999 41.0313 41.6314 41.3313 41.3313C41.6314 41.0313 41.8 40.6243 41.8 40.1999V11.3999C41.8 10.9756 41.6314 10.5686 41.3313 10.2686C41.0313 9.96851 40.6243 9.79994 40.2 9.79994H31.272ZM21 4.07194L26.728 9.79994H15.272L21 4.07194ZM38.6 38.5999H3.39995V12.9999H38.6V38.5999ZM13 22.5999C12.1513 22.5999 11.3373 22.2628 10.7372 21.6627C10.1371 21.0626 9.79995 20.2486 9.79995 19.3999C9.79995 18.5513 10.1371 17.7373 10.7372 17.1372C11.3373 16.5371 12.1513 16.1999 13 16.1999C13.8486 16.1999 14.6626 16.5371 15.2627 17.1372C15.8628 17.7373 16.2 18.5513 16.2 19.3999C16.2 20.2486 15.8628 21.0626 15.2627 21.6627C14.6626 22.2628 13.8486 22.5999 13 22.5999ZM35.4 35.3999H11.4L16.2 25.7999L20.2 33.7999L27.4 19.3999L35.4 35.3999Z"/></svg>
      <?php } ?>
      
      <?php if($media_type == 'video') { ?>
      <svg class="svgicon svgicon-video" width="14.22" height="16" viewBox="0 0 32 36"><path d="M0.996146 0.27018C1.61278 -0.0876641 2.37327 -0.090204 2.99228 0.263514L30.9923 16.2635C31.6154 16.6196 32 17.2823 32 18C32 18.7177 31.6154 19.3804 30.9923 19.7365L2.99228 35.7365C2.37327 36.0902 1.61278 36.0877 0.996146 35.7298C0.379517 35.372 0 34.7129 0 34V2C0 1.28706 0.379517 0.628024 0.996146 0.27018ZM4 5.44636V30.5536L25.9689 18L4 5.44636Z"/></svg>
      <?php } ?>
    </div>
  </a>
  <?php require ($_SERVER['GUILD'].'module/user-action.php')?>
</article>