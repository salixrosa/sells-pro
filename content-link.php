<div class="postmeta">
  <?php echo is_home() ? "<a href='" . get_permalink() . "'>" : ''; ?>
  <h1><i class="fa fa-link"></i> Just a Link: <?php the_title(); ?></h1>
  <?php echo is_home() ? "</a>" : '' ; ?>
  <p>by
    <?php echo get_the_author(); ?> on
    <time datetime='<?php echo get_the_date('Y-m-d'); ?>'>
      <?php echo get_the_date(); ?>
    </time>
    <?php if( has_category() ) { echo "in "; the_category(', '); } ?>
  <p>
</div>
<?php echo is_home() ? "<a href='" . get_permalink() . "'>" : ''; ?>
  <div class="postcontent">
    <?php
    the_content();
    ?>
  </div>
<?php echo is_home() ? "</a>" : '' ; ?>
