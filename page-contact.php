<?php get_header(); ?>

<div class="p-page-contact">
    <div class="p-page__conts">
        <div class="p-ttl">
            CONTACT
        </div>
        <div class="p-page-contact__wrap">
            <?php while(have_posts()): the_post(); ?>
              <?= the_content(); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer();
