<a href="<?= get_the_permalink() ?>">
    <div class="p-news-list__item">
        <div class="p-news-list__wrap">
            <div class="p-news-list__date">
                <?php echo get_post_time('Y.m.d -D-'); ?>
            </div>
            <?php
                $post_time = get_the_time('U');
                $days = 30; //New!を表示させる日数
                $last = time() - ($days * 24 * 60 * 60);
                if ($post_time > $last) {
                    echo '<div class="p-news-list__new">NEW</div>';
                }
            ?>
        </div>
        <div class="p-news-list__ttl">
            <?php the_title(); ?>
        </div>
    </div>
</a>
