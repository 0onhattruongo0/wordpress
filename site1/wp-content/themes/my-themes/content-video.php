<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header">
        <?php nhattruong_entry_header(); ?>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php (is_single()) ? nhattruong_entry_tag() : "" ?>
    </div>
</article>