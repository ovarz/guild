<div class="tag-list">
  <?php for ($i=1; $i <= 5 ; $i++) { ?>
  <a aria-label="Tag" title="Tag" class="tag-link" href="tag/">
    <?php echo $random_tag[array_rand($random_tag)]; ?>
  </a>
  <?php } ?>
</article>