<div class="topic-list-container">
  <?php for ($i=1; $i <= 5 ; $i++) { ?>
    <a aria-label="Link Title" title="Link Title" class="topic-link" href="topik/">
      <h4 class="topic-title"><?php echo $random_topic[array_rand($random_topic)]; ?></h4>
    </a>
  <?php } ?>
</div>
    
