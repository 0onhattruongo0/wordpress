<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumnail">
        <?php nhattruong_thumbnail('large'); ?>
    </div>
    <div class="entry-header">
        <?php nhattruong_entry_header(); ?>
        <?php $attachment = get_children(array('post_parent' => $post->ID));
        $attachment_number = count($attachment);
        printf(__('This image post contains %1$s photos', 'nhattruong'), $attachment_number);
        ?>
    </div>
    <div class="entry-content">
        <?php nhattruong_entry_content(); ?>
        <?php (is_single()) ? nhattruong_entry_tag() : "" ?>
    </div>
</article>