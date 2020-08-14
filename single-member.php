<?php
    get_header();
    the_post();

    $works = get_posts([
        'post_type' => 'works',
        'tax_query' => [
            [
                'taxonomy' => 'creator',
                'field'    => 'slug',
                'terms'    => $post->post_name,
            ],
        ],
        //'posts_per_page' => -1,
    ]);


    //dd($post->post_author);
?>

<div class="p-single-member">
    <div class="p-page__conts">
        <div class="p-single-member__ttl p-ttl">
            <?= the_title(); ?>
        </div>

        <section class="p-single-member__wrap">
            <div class="p-single-member__kv">
                <div class="p-single-member__photo">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(array()); ?>
                    <?php endif; ?>
                    <div class="p-single-member__name">
                        <?= the_title(); ?>
                    </div>
                </div>
                <div class="p-single-member__sns">
                    <?php if(get_field('twiiter_id')): ?>
                        <div class="p-single-member__sns-item p-single-member__sns-twitter">
                            <a href="<?= the_field('twiiter_id'); ?>" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('instagram_id')): ?>
                        <div class="p-single-member__sns-item p-single-member__sns-instagram">
                            <a href="<?= the_field('instagram_id'); ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="p-single-member__profile">
                <?php the_content(); ?>
            </div>
        </section>
    </div>

    <?php if(get_field('topics')): ?>
        <section class="p-single-member__topics">
            <div class="p-page__conts u-media__pc-flex">
                <div class="p-single-member__topics-ttl">
                    <div class="p-ttl">
                        TOPICS
                    </div>
                </div>
                <div class="p-single-member__topics-wrap">
                    <?php if(get_field('topics')): ?>
                    <?php while(the_repeater_field('topics')):?>
                        <div class="p-single-member__topics-cont">
                            <div class="p-single-member__topics-tag">
                                <?= the_sub_field('tag'); ?>
                            </div>
                            <div class="p-single-member__topics-text">
                                <?php if(get_sub_field('url')): ?>
                                    <a href="<?= the_sub_field('url'); ?>" target="_blank">
                                <?php endif; ?>
                                    <?= the_sub_field('title'); ?>
                                <?php if(get_sub_field('url')): ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <?php endif; ?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="p-single-member__pagination">
        <div class="p-page__conts">
            <?php if (get_previous_post()):?>
                <div class="p-single-member__pagination-prev">

                </div>
            <?php endif; ?>
            <a href="<?= get_bloginfo('url') ?>/member/" class="p-single-member__pagination-list">
                LIST OF MEMBER
            </a>
            <?php if (get_next_post()):?>
                <div class="p-single-member__pagination-next">

                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php
get_footer();
