<?php
/*
Template Name:home
 */
?>

<?php get_header(); ?>

<section class="services">
    <div class="container">
        <h2 class="title">НАШИ УСЛУГИ</h2>
        <div class="services__inner">
            <?php the_field('service-text');?>
            <?php the_field('service');?>
        </div>
    </div>
</section>


<section class="benefits">
    <div class="container">
        <div class="benefits__inner">
            <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="<?php the_field('PhotoInWhyWe');?>" alt="car">
            <div class="benefits__content">
                <h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>
                <ul class="benefits__list">
                    <li class="benefits__item">
                        <p class="benefits__item-num"><?php the_field('FirstLineFirstArgument');?></p>
                        <p class="benefits__item-title"><?php the_field('ScondLineFirstArgument');?></p>
                        <p class="benefits__item-text">
                            <?php the_field('ThirdLineFirstArgument');?>
                        </p>
                    </li>
                    <li class="benefits__item">
                        <p class="benefits__item-num"><?php the_field('FirstLineSecondArgument');?></p>
                        <p class="benefits__item-title"><?php the_field('SecondLineSecondArgument');?></p>
                        <p class="benefits__item-text">
                            <?php the_field('ThirdLineSecondArgument');?>
                        </p>
                    </li>
                    <li class="benefits__item">
                        <p class="benefits__item-num"><?php the_field('FirstLineThirdArgument');?></p>
                        <p class="benefits__item-title"><?php the_field('SecondLineThirdArgument');?></p>
                        <p class="benefits__item-text">
                            <?php the_field('ThirdLineThirdArgument');?>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="carousel">
    <div class="container">
        <h2 class="title">
            ПРИГНАННЫЕ НАМИ АВТО
        </h2>
        <div class="carousel__inner">

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="carousel__item">
                        <div class="carousel__item-box">
                            <?php the_post_thumbnail(
                                array(380, 250),
                                array(
                                    'class' => 'carousel__item-img'
                                )
                            );?>
                            <h4 class="carousel__item-title"><?php the_title();?></h4>
                            <p class="carousel__item-text"><?php the_content();?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata(); // Сбрасываем $post
            ?>
        </div>
    </div>
</section>



<section class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__info">
                <h2 class="title">
                    КОНТАКТЫ
                </h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <p class="contacts__item-title">Адрес</p>
                        <p class="contacts__item-text">
                            Киев, Подол <br>
                            ул. Константиновская, д.71
                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Время работы</p>
                        <p class="contacts__item-text">
                            Пн-Сб: с 9:00 до 19:00, <br>
                            Вс: выходной
                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Телефон</p>
                        <p class="contacts__item-text">
                            <?php the_field('NumberPhone');?>
                        </p>
                    </li>
                </ul>
            </div>
            <form class="contacts__form">
                <h2 class="title contacts__title">Оставить заявку</h2>
                <?php echo(do_shortcode('[contact-form-7 id="69ee519" title="Форма для заявки"]'));?>
            </form>
        </div>
    </div>
</section>

<?php get_footer();?>