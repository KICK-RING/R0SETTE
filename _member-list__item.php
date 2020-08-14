<div class="p-member-list__item">
    <div class="p-member-list__photo">
        <a href="<?= get_the_permalink() ?>">
            <img src="<?= get_the_post_thumbnail_url($post->ID, 'medium') ?>" alt="<?= get_the_title() ?>">
            <div class="p-member-list__name">
                <?= the_title(); ?>
            </div>
        </a>
    </div>

    <div class="p-member-list__sns">
        <?php if(get_field('twiiter_id')): ?>
            <div class="p-member-list__sns-item p-member-list__sns-twitter">
                <a href="<?= the_field('twiiter_id'); ?>" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        <?php endif; ?>
        <?php if(get_field('instagram_id')): ?>
            <div class="p-member-list__sns-item p-member-list__sns-instagram">
                <a href="<?= the_field('instagram_id'); ?>" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
