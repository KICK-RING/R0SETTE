<section class="p-disco">
    <div class="p-page__conts u-media__pc-flex">
        <div class="p-disco__ttl">
            <div class="p-ttl">
                DISCOGRAPHY
            </div>
        </div>
        <div class="p-disco__wrap">
            <?php if(get_field('discs',29)): ?><? // ページID local58 本番29 ?>
            <?php while(the_repeater_field('discs',29)): ?>
                <div class="p-disco__cont">
                    <div class="p-disco__img">
                        <?= wp_get_attachment_image(get_sub_field('jacket_image'), 'medium') ?>
                    </div>
                    <div class="p-disco__desc">
                        <div class="p-disco__date">
                            <span class="p-disco__date-number"><?= get_sub_field('release_date'); ?></span> RELEASE
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
                    <?php if(get_sub_field('shop_url')): ?>
                        <a class="p-disco__btn-item" href="<?= get_sub_field('shop_url'); ?>" target="_blank">
                            <img src="<?= image('shop.png') ?>" alt="SHOP">SHOP
                        </a>
                    <?php else: //フィールド名の入力が無い場合 ?>
                        <div class="p-disco__btn-item p-disco__btn-item__none">
                            <img src="<?= image('shop.png') ?>" alt="SHOP">SHOP
                        </div>
                    <?php endif; //フィールド名についてのループ終わり ?>
                    <?php if(get_sub_field('digital_url')): ?>
                        <a class="p-disco__btn-item" href="<?= get_sub_field('digital_url'); ?>" target="_blank">
                            <img src="<?= image('digital.png') ?>" alt="DIGITAL">DIGITAL
                        </a>
                    <?php else: //フィールド名の入力が無い場合 ?>
                        <div class="p-disco__btn-item p-disco__btn-item__none">
                            <img src="<?= image('digital.png') ?>" alt="DIGITAL">DIGITAL
                        </div>
                    <?php endif; //フィールド名についてのループ終わり ?>
                </div>
            <?php endwhile;?>
            <?php endif; ?>
            <?php wp_reset_postdata();?>
        </div>
    </div>
</section>
