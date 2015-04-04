<?php 

// Finished

//=============================================================================
// VIEWS/GLOBAL/_TOPBAR.PHP 
// ----------------------------------------------------------------------------- 
// Includes topbar output.
//=============================================================================


// ---------------------- | Home Page - Header - Content | --------------- 

?>


<?php if ( x_get_option( 'x_topbar_display', 0 )==1 ) : ?>


<div class="x-topbar">
    <div class="x-topbar-inner x-container-fluid max width">
        <?php if ( x_get_option( 'x_topbar_content' ) !='' ) : ?>
        <p class="p-info">
            <?php echo x_get_option( 'x_topbar_content' ); ?>
        </p>

        <?php endif; ?>

        <?php x_social_global(); ?>




    </div>
</div>

<!-- For Desktop View - Home Page - Header -->
<?php if ( !wp_is_mobile() ) { ?>

<?php if(is_front_page()){ ?>
<!--<div id="topp">
    <span id="top-1">THE BABLE BLOG</span>
    <br>
    <span id="top-2">Business need to fulfill brand promises by delighting</span>
</div> -->
<?php } ?>
<?php } ?> 
<?php endif; ?>

<!-- END of For Desktop View - Home Page - Header -->