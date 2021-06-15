<?php
get_header();
?>

<main class="edukacenterPage">
    <h1 class="edukacenterPage__header edukacenterPage__header--chooseCourse">
        Kursy kwalifikacyjne
    </h1>

    <?php
        $args = array(
                'post_type' => 'product',
                'posts_per_page' => 500
        );

        $query = new WP_Query($args);

        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
                $cat = get_field('kategoria');
                if($cat == 'Kursy kwalifikacyjne') {
                 ?>

                    <section class="chooseCourse__itemWrapper chooseCourse__itemWrapper--singleCourse">
                        <div class="chooseCourse__item chooseCourse__item--singleCourse">
                            <span class="chooseCourse__shadow"></span>
                            <div class="chooseCourse__imgWrapper">
                                <img class="chooseCourse__img" src="<?php echo get_field('zdjecie'); ?>" alt="kurs" />
                            </div>
                            <div class="chooseCourse__content">
                                <h3 class="chooseCourse__header">
                                    <?php echo the_title(); ?>
                                </h3>
                                <p class="chooseCourse__text">
                                    <?php echo get_field('krotki_opis'); ?>
                                </p>
                                <button class="button--testimonials button--chooseCourse">
                                    <a class="button--link" href="
<?php
                                    if(get_field('link') != '') {
                                        echo get_field('link');
                                    }
                                    else {
                                        the_permalink();
                                    }
                                    ?>
">
                                        Więcej informacji
                                    </a>
                                </button>
                            </div>
                        </div>
                    </section>

                        <?php
                }
            }
        }
    ?>
</main>

<?php
get_footer();
?>
