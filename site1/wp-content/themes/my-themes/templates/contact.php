<?php
/*
    Template Name: Contact
    */
?>

<?php get_header(); ?>
<div class="content">
    <div id="main-content">
        <div class="contact-info">
            <h4>Địa chỉ liên hệ:</h4>
            <p>hfkasjdhfkasjhf sdfsafsf</p>
            <p>07722256465</p>
        </div>
        <div class="contact-info">
            <?php echo do_shortcode('[contact-form-7 id="1386" title="Contact form 1"]'); ?>
        </div>
    </div>
    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div>

</div>
<?php get_footer(); ?>