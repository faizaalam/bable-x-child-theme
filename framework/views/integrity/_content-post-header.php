<?php

// Finished

// =============================================================================
// VIEWS/INTEGRITY/_CONTENT-POST-HEADER.PHP
// -----------------------------------------------------------------------------
// Standard <header> output for various posts.
// =============================================================================

// ------------------- | Home Page - Post Title | ------------------------


?>


<header class="entry-header">
  <?php if ( is_single() ) : ?>
  <?php else : ?>
  <h2 class="entry-title">
    <!-- Limiting the Title to 50 characters to fit within Post Box -->
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" target="_blank">
  <?php the_titlesmall('', '', true, '50') ?>
    </a>
  </h2>
  <?php endif; ?>
  <?php x_integrity_entry_meta(); ?>
</header>
