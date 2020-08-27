<?php
    get_header();
    the_post();

    $postID = get_the_ID();
    $args = array(
        'exclude' => $postID,
        'posts_per_page' => -1,//取得する件数。-1で全件取得
        'post_type' => 'member',//取得する投稿タイプ
    );

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
                        <?php if(get_sub_field('url')): ?>
                            <a class="p-single-member__topics-link" href="<?= the_sub_field('url'); ?>" <?= get_sub_field('blank')? ' target="_blank" ': ''; ?>>
                        <?php endif; ?>

                            <div class="p-single-member__topics-cont">
                                <div class="p-single-member__topics-tag">
                                    <?= the_sub_field('tag'); ?>
                                </div>
                                <div class="p-single-member__topics-text">
                                    <?= the_sub_field('title'); ?>
                                </div>
                            </div>

                        <?php if(get_sub_field('url')): ?>
                            </a>
                        <?php endif; ?>
                    <?php endwhile;?>
                    <?php endif; ?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="p-single-member__pagination">
        <div class="p-page__conts">
            <div class="p-single-member__list">
                <?php $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post );
                ?>

                <?php get_template_part('_member-list__item'); ?>

                <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
