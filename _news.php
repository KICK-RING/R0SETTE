<section class="p-news">
    <div class="p-page__conts u-media__pc-flex">
        <div class="p-news__ttl">
            <div class="p-ttl">
                NEWS
            </div>
        </div>
        <div class="p-news__wrap">
            <?php if ( is_front_page() ) : ?>
                <?php query_posts('posts_per_page=4&paged='.$paged); ?>
            <?php endif; ?>
            <?php
                while (have_posts()){
                    the_post();
                    get_template_part('_news-list__item');
                }
            ?>
        </div>
    </div>
</section>
