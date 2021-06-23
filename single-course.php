<?php
get_header();
?>

<main class="singleCourse">
        <section class="course__section course__section--first">
            <section class="course__section__side">
                <img class="course__section__img" src="<?php echo get_field('dla_kogo_-_zdjecie'); ?>" alt="<?php echo the_title(); ?>" />
            </section>
            <section class="course__section__side">
                <h1 class="course__title">
                    <?php echo the_title(); ?>
                </h1>
                <h2 class="course__section__side__header">
                    Dla kogo jest ten kurs?
                </h2>
                <article class="course__section__side__content">
                    <?php echo get_field('dla_kogo_-_opis'); ?>
                </article>
                <section class="course__prices__content">
                    <button class="button course__prices__btn">
                        <a class="button--link course__prices__link" href="<?php echo get_field('link'); ?>">
                            Zapisz się teraz
                        </a>
                    </button>
                    <section class="course__prices__content__prices">
                        <?php
                        if(get_field('cena_przed_promocja') != '') {
                            ?>
                            <h4 class="course__price__beforePromotion">
                                <span class="crossed">
                                    <?php echo get_field('cena_przed_promocja'); ?>
                                </span>
                                        <span class="course__price__percent">
                                    -70%
                                </span>
                            </h4>
                            <?php
                        }
                        ?>
                        <h3 class="course__price__afterPromotion">
                            <?php echo get_field('cena_po_promocji'); ?>
                        </h3>
                    </section>
                </section>
            </section>
        </section>

    <section class="course__section">
        <section class="course__section__side">
            <img class="course__section__img" src="<?php echo get_field('dlaczego_warto_-_zdjecie'); ?>" alt="<?php echo the_title(); ?>" />
        </section>
        <section class="course__section__side">
            <h2 class="course__section__side__header">
                Dlaczego warto?
            </h2>
            <article class="course__section__side__content">
                <?php echo get_field('dlaczego_warto_-_opis'); ?>
            </article>
        </section>
    </section>

    <section class="course__section course__section--block">
        <h2 class="course__section__header course__section__header--blue">
            Historia powstania kursu
        </h2>
        <section class="course__section__content course__section__side--frame">
            <?php echo get_field('historia_powstania_kursu'); ?>
        </section>
    </section>

    <section class="course__section course__section--block">
        <h2 class="course__section__header course__section__header--blue">
            O autorce kursu
        </h2>
        <section class="course__section__content course__author course__section__side--frame">
            <?php echo get_field('o_autorze_kursu'); ?>
        </section>
    </section>

    <section class="course__section course__section--block">
        <h2 class="course__section__header course__section__header--blue">
            O kursie metodą online
        </h2>
        <section class="course__section__content course__section__side--frame">
            <?php echo get_field('o_kursie_metoda_online'); ?>
        </section>
    </section>

    <section class="course__section">
        <section class="course__section__side">
            <img class="course__section__img--smaller" src="<?php echo get_field('co_w_nim_znajdziesz_-_zdjecie'); ?>" alt="<?php echo the_title(); ?>" />
        </section>
        <section class="course__section__side">
            <h2 class="course__section__side__header">
                Co w nim znajdziesz?
            </h2>
            <article class="course__section__side__content">
                <?php echo get_field('co_w_nim_znajdziesz_-_opis'); ?>
            </article>
        </section>
    </section>

    <section class="course__section course__section--block">
        <h2 class="course__section__header">
            Tematyka na kursie
        </h2>
        <section class="course__section__content course__section__side--frame">
            <?php echo get_field('tematyka_na_kursie'); ?>
        </section>
    </section>

    <section class="course__section course__section--flexColumn">
        <h2 class="course__section__header--noMargin">
            ZOBACZ WIĘCEJ OPINII NA FACEBOOKU
        </h2>
        <button class="button button--courseOpinion course__prices__btn">
            <a class="button--link" href="https://www.facebook.com/szkoleniaeduka/reviews/?ref=page_internal">
                Sprawdź nasze opinie
            </a>
        </button>
    </section>

    <section class="course__section--frame course__section--frame--dark course__section--flexColumn">
        <h2 class="course__section__header">
            Przekonaj się jak wielką moc ma nauka przez zabawę- zastosuj ją w codziennym życiu, stosując ćwiczenia i zabawy.
        </h2>
        <h2 class="course__section__header">
            Nie wiesz jak? Pokażę Ci!
        </h2>
        <p>
            Dostęp do kursu otrzymujesz na okres dożywotni na wygodnej platformie on-line ( wystarczy tylko dostęp do internetu, bez instalowania żadnych wtyczek )!
        </p>
        <p>
            Oznacza to, że w każdej chwili masz nieograniczony dostęp do materiałów video oraz pdf
        </p>
        <p>
            *Dostęp do kursu otrzymasz od zaraz po zapisaniu się na swój adres e-mail: wyślemy Tobie indywidualne hasło, login oraz paragon/fakturę.
        </p>
    </section>

    <section class="course__section--frame course__section--flexColumn">
        <h2 class="course__section__header">
            Wystawiamy zaświadczenia na drukach MEN
        </h2>
        <p>
            Jesteśmy Placówką Kształcenia Ustawicznego, więc możesz swoją wiedzę udokumentować na akceptowanym przez pracodawców placówek publicznych i niepublicznych w całej Polsce - certyfikacie MEN
        </p>
        <p>
            Zaświadczenie wydawane jest na  podstawie przepisów rozporządzenia Ministra Edukacji Narodowej z dnia 19 marca 2019 r. w sprawie kształcenia ustawicznego w formach pozaszkolnych
        </p>

        <section class="course__disclaimer">
            <h6>* czytaj zasady zaświadczeń MEN w zakładce w MENU</h6>
            <h6>**kurs nie nadaje kwalifikacji  zawodowych, kurs ma charakter doskonalający</h6>
        </section>
    </section>

    <?php
        if(get_field('niespodzianka') != '') {
            ?>
            <section class="course__section--frame course__section--frame--dark course__section--flexColumn">
                <?php echo get_field('niespodzianka'); ?>
            </section>
            <?php
        }
    ?>
</main>

<?php
get_footer();
?>