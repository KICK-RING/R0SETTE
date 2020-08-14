<div class="p-news-list__item">
    <div class="p-news-list__item-date">
        <?php echo get_post_time('Y.m.d -D-'); ?>
    </div>
    <?php
        $post_time = get_the_time('U');
        $days = 30; //New!を表示させる日数
        $last = time() - ($days * 24 * 60 * 60);
        if ($post_time > $last) {
            echo '<div class="p-news-list__item-new">NEW</div>';
        }
    ?>

    <div class="p-news-list__item-ttl">
        <a href="<?= get_the_permalink() ?>">
            <?php the_title(); ?>
        </a>
    </div>

</div>
