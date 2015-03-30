<?php

// Finished
// =============================================================================
// VIEWS/GLOBAL/_CONTENT-THE-EXCERPT.PHP
// -----------------------------------------------------------------------------
// Display of the_excerpt() for various entries.
// =============================================================================


// ------------------- | Home Page - Post Excerpt Content below Post Title | ------------------------

?>

<div class="entry-content excerpt">
    <!-- Date in format Month Date,Year -->
    <div id="excerpt-date">
        <?php echo get_the_date( 'F j, Y'); ?>
    </div>

    <!-- END of Date in format Month Date,Year -->

    <!-- Post Body Content limited to 100 Characters and '...' -->
    <div id="excerpt-text">
        <?php $excerpt = get_the_excerpt(); echo mb_strimwidth($excerpt, 0, 100, "..."); ?> </div>

    <!-- END of Post Body Content limited to 100 Characters and '...' -->

    <!-- Share Part -->
    <div class="share-category">
        <div id="category">in
            <?php the_category( ' '); ?> / by
            <a href="#" id="author">
                <?php the_author(); ?>
            </a>
        </div>
        <div class="outer sharing"><img class="share-img" src="http://127.0.0.1/wordpress/wp-content/uploads/2015/02/Blog-Copy-2.png" />
            <div class="inner sharing">
                <span class='st_facebook'></span>
                <span class='st_twitter'></span>
                <span class='st_linkedin'></span>
                <span class='st_googleplus'></span>
            </div>
        </div>
    </div>

    <!-- END of Share Part -->

</div>