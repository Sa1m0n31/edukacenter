<?php
get_header();
?>

    <main class="landing">
        <img class="landing__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/hero-image.png'; ?>" alt="eduka-center" />
        <div class="landing__content">
            <h1 class="landing__content__header">
                Platforma online
            </h1>
            <h2 class="landing__content__subheader display-md">
                Edukacja dzieci 1-6 lat dla rodziców, opiekunów i nauczycieli
            </h2>
            <button class="button button--cta button--desktop">
                <a class="button--link" href="https://kursy.edukacenter.pl/">
                    Zobacz kursy i materiały
                </a>
            </button>
        </div>
    </main>

    <h2 class="landing__content__subheader display-xs">
        Edukacja dzieci 1-6 lat dla rodziców, opiekunów i nauczycieli
    </h2>
    <button class="button button--cta button--mobile">
        Zobacz kursy i materiały
    </button>

    <section class="newsletterSection">
        <h2 class="newsletter__header">
            Zapisz się do naszego newslettera
        </h2>
        <p class="newsletter__text">
            Otrzymuj na bieżąco informacje o nowościach, rabatach oraz informacje o bezpłatnych materiałach.
        </p>
        <button class="button button--newsletter">
            Chcę się zapisać!
        </button>
    </section>

    <section class="certsSection">
        <div class="certs__imgWrapper">
            <img class="certs__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/certyfikat.png'; ?>" alt="certyfikaty" />
        </div>
        <div class="certs__imgWrapper">
            <img class="certs__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/certyfikat.png'; ?>" alt="certyfikaty" />
        </div>
        <div class="certs__content">
            <h3 class="certs__header">
                Zaświadczenia z kursu
            </h3>
            <p class="certs__text">
                U nas z każdego kursu wygenerujesz sobie zaświadczenie na druku MEN. Jesteśmy Placówką Kształcenia Ustawicznego oraz Instytucją Szkoleniową, posiadamy ważne wpisy.
            </p>
            <p class="certs__text">
                *zapoznaj się z zasadami zaświadczeń w formie papierowej. Formę elektroniczną dostajesz na maila zaraz po przerobieniu kursu, więcej w zakładce CERTYFIKATY
            </p>
            <button class="button button--certs">
                <a class="button--link" href="https://kursy.edukacenter.pl/moje-postepy/">
                    Poczytaj więcej o nas
                </a>
            </button>
        </div>
    </section>

    <section class="testimonialsSection">
        <h2 class="testimonials__header">
            Opinie o nas
        </h2>
        <h2 class="testimonials__subheader">
            Sprawdź wszystkie nasze realne opinie w rekomendacjach na <b>Facebooku</b>!
        </h2>

        <?php echo do_shortcode('[fbrev page_name="Skylo.pl - Agencja Interaktywna" page_id="107515137810946" page_access_token="EAAVVPjFKgSEBADqty1lneo0dt4bbfZA8q8iSNkv6KhmxJJXqUDZBSMNMtYt6I9J3lsb0HLFYhNZBHTPbXZAxrlj4CvQiwEc34V33CxFn15xr1lACYIOfOYWND6EZBbwtkeFcjr5job0TWtjqjqzg25ZAVnE3ymZCvPKU2Pr5p12rftMJghBo6rD" pagination="7" text_size="120" hide_based_on=true centered=true dark_theme=true lazy_load_img=true show_success_api=true open_link=true nofollow_link=true api_ratings_limit="500"]'); ?>

        <button class="button--testimonials">
            <a class="button--link" href="https://www.facebook.com/szkoleniaeduka/reviews/?ref=page_internal">
                Zobacz wszystkie opinie
            </a>
        </button>
    </section>

    <section class="partnersSection">
        <h2 class="partners__header">
            Nasi partnerzy
        </h2>

        <img class="partners__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/partner.png'; ?>" alt="partner" />

        <h3 class="partners__caption">
            <b>Kursy na Opiekuna do Żłobka</b> z Decyzją Ministerstwa
        </h3>
    </section>

<?php
get_footer();
?>