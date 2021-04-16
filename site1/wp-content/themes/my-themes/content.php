<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php nhattruong_thumbnail('thumbnail'); ?>
    </div>
    <div class="entry-header">
        <?php nhattruong_entry_header(); ?>
        <?php nhattruong_entry_meta(); ?>
    </div>
    <div class="entry-content">
        <?php nhattruong_entry_content(); ?>
        <?php (is_single()) ? nhattruong_entry_tag() : "" ?>
    </div>
</article>