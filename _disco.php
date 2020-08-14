<section class="p-disco">
    <div class="p-page__conts u-media__pc-flex">
        <div class="p-disco__ttl">
            <div class="p-ttl">
                DISCOGRAPHY
            </div>
        </div>
        <div class="p-disco__wrap">
            <?php if(get_field('discs',58)): ?><? // ページID local58  ?>
            <?php while(the_repeater_field('discs',58)): ?>
                <div class="p-disco__cont">
                    <div class="p-disco__img">
                        <?= wp_get_attachment_image(get_sub_field('jacket_image'), 'medium') ?>
                    </div>
                    <div class="p-disco__desc">
                        <div class="p-disco__date">
                            <?= get_sub_field('release_date'); ?> RELEASE
                        </div>
                        <div class="p-disco__album-ttl">
                            <?= get_sub_field('title'); ?>
                        </div>
                        <div class="p-disco__item">
                            <?= get_sub_field('text'); ?>
                        </div>
                    </div>
                </div>
                <div class="p-disco__btn">
                    <a class="p-disco__btn-item" href="<?= get_sub_field('shop_url'); ?>" target="_blank">
                        <img src="<?= image('shop.png') ?>" alt="SHOP">SHOP
                    </a>
                    <a class="p-disco__btn-item" href="<?= get_sub_field('digital_url'); ?>" target="_blank">
                        <img src="<?= image('digital.png') ?>" alt="DIGITAL">DIGITAL
                    </a>
                </div>
            <?php endwhile;?>
            <?php endif; ?>
            <?php wp_reset_postdata();?>
        </div>
    </div>
</section>
