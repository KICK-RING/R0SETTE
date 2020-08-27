<?php get_header(); ?>

<div class="p-page-schedule">
    <div class="p-page__conts">
        <div class="p-ttl">
            SCHEDULE
        </div>

        <?php if(get_field('banner')): ?>
            <div class="p-page-schedule__banner">
                <?php if(get_field('url')): ?>
                    <a href="<?= the_field('url'); ?>" <?= get_field('blank')? ' target="_blank" ': ''; ?>>
                <?php endif; ?>
                    <?= wp_get_attachment_image(get_field('banner'), 'medium') ?>
                <?php if(get_field('url')): ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="p-page-schedule__wrap">
            <?= the_field('google_calendar'); ?>
        </div>
    </div>
</div>

<?php get_footer();
