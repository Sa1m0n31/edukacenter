<?php
get_header();
?>

<main class="edukacenterPage">
    <h1 class="edukacenterPage__header edukacenterPage__header--chooseCourse">
        <span class="bold">Wybierz kurs</span> dla siebie!
    </h1>

    <section class="chooseCourse__itemWrapper">
        <div class="chooseCourse__item">
            <span class="chooseCourse__shadow"></span>
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/kursy-kwalifikacyjne.png'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Kursy kwalifikacyjne
                </h3>
                <p class="chooseCourse__text">
                    Kursy nadające uprawnienia zawodowe typu Opiekun w Żłobku, Opiekun Dzienny, Instruktor tańca dziecięcego, posiadające ważne legalne uprawnienia.
                </p>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="https://www.facebook.com/szkoleniaeduka/reviews/?ref=page_internal">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </div>
    </section>

    <section class="chooseCourse__itemWrapper">
        <div class="chooseCourse__item">
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/kursy-online.png'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Kursy online, pakiety
                </h3>
                <p class="chooseCourse__text">
                    Kursy on-line i pakiety PDF dla rodziców, nauczycieli, opiekunów i innych zainteresowanych.
                </p>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="https://www.facebook.com/szkoleniaeduka/reviews/?ref=page_internal">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </div>
    </section>

    <section class="chooseCourse__itemWrapper">
        <section class="chooseCourse__item">
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/plakaty.png'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Plakaty tematyczne
                </h3>
                <p class="chooseCourse__text">
                    Plakaty tematyczne na każdą okazję, do samodzielnego wydruku. Dostępne formaty A4, A3, A2.
                </p>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="https://www.facebook.com/szkoleniaeduka/reviews/?ref=page_internal">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </section>
    </section>

    <section class="chooseCourse__itemWrapper">
        <section class="chooseCourse__item">
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/e-booki.png'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    E-booki
                </h3>
                <p class="chooseCourse__text">
                    Do wyboru wartościowe e-booki nawet już od 5 zł
                </p>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="https://www.facebook.com/szkoleniaeduka/reviews/?ref=page_internal">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </section>
    </section>

    <section class="chooseCourse__itemWrapper">
        <section class="chooseCourse__item">
            <div class="chooseCourse__imgWrapper">
                <img class="chooseCourse__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/pomoce-do-pracy-z-dziecmi.png'; ?>" alt="kurs" />
            </div>
            <div class="chooseCourse__content">
                <h3 class="chooseCourse__header">
                    Pomoce do pracy z dziećmi
                </h3>
                <p class="chooseCourse__text">
                    Pomoce do pracy i zabawy z dziećmi w wieku 2-6 lat w pdf do wydrukowania w domu już od 5 zł
                </p>
                <button class="button--testimonials button--chooseCourse">
                    <a class="button--link" href="https://www.facebook.com/szkoleniaeduka/reviews/?ref=page_internal">
                        Więcej informacji
                    </a>
                </button>
            </div>
        </section>
    </section>
</main>

<?php
get_footer();
?>
