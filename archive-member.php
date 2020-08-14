<?php get_header(); ?>

<div class="p-page-member">
    <div class="p-page__conts">
        <div class="p-ttl">
            MEMBER
        </div>
        <div class="p-page-member__list">
            <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('_member-list__item');
                }
            ?>
        </div>
    </div>
</div>

<?php get_footer();
