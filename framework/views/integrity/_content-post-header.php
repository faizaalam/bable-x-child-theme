<?php

// =============================================================================
// VIEWS/INTEGRITY/_CONTENT-POST-HEADER.PHP
// -----------------------------------------------------------------------------
// Standard <header> output for various posts.
// =============================================================================

?>

<header class="entry-header">
  <?php if ( is_single() ) : ?>
  <!-- <h1 class="entry-title"></h1> -->
  <?php else : ?>
  <h2 class="entry-title">
   <!-- <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to: "%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>"> -->
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_titlesmall('', '...', true, '45') ?>
     <!-- <?php x_the_alternate_title(); ?> --></a>
  </h2>
  <?php endif; ?>
  <?php x_integrity_entry_meta(); ?>
</header>