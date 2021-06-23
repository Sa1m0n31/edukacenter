<?php
get_header();
?>

<main class="edukacenterPage edukacenterPage--helpers">
    <h1 class="edukacenterPage__header edukacenterPage__header--chooseCourse">
        Pomoce do pracy z dziećmi
    </h1>

    <section class="chooseCourse__itemWrapper">
        <div class="chooseCourse__item">
            <span class="chooseCourse__shadow"></span>
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/karty-czytanie.jpg'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Karty do nauki czytania i pisania
                </h3>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="<?php echo get_page_link(get_page_by_title('Karty do nauki pisania i czytania')->ID); ?>">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </div>
    </section>

    <section class="chooseCourse__itemWrapper">
        <div class="chooseCourse__item">
            <span class="chooseCourse__shadow"></span>
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/karty-montessori.jpg'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Karty Inspirowane Metodą Montessori
                </h3>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="<?php echo get_page_link(get_page_by_title('Karty inspirowane metodą Montessori')->ID); ?>">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </div>
    </section>

    <section class="chooseCourse__itemWrapper">
        <div class="chooseCourse__item">
            <span class="chooseCourse__shadow"></span>
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/karty-tematyczne.jpg'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Karty tematyczne
                </h3>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="<?php echo get_page_link(get_page_by_title('Karty tematyczne')->ID); ?>">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </div>
    </section>

    <section class="chooseCourse__itemWrapper">
        <div class="chooseCourse__item">
            <span class="chooseCourse__shadow"></span>
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/karty-pozostale.jpg'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Pozostałe pomoce
                </h3>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="<?php echo get_page_link(get_page_by_title('Pozostałe pomoce')->ID); ?>">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
