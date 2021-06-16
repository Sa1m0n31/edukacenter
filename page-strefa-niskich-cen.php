<?php
get_header();
?>

<main class="edukacenterPage edukacenterPage--lowPrices">
    <h1 class="edukacenterPage__header edukacenterPage__header--chooseCourse">
        Strefa niskich cen
    </h1>

    <section class="lowPrices">
        <h2 class="lowPrices__header">
            Co to jest strefa niskich cen?
        </h2>
        <p>
            Zapisując się do STREFY NISKICH CEN masz dostęp do promocji i produktów po bardzo atrakcyjnych cenach niedostępnych na naszej głównej stronie. Wszystkie promocje w strefie są zawsze ograniczone CZASOWO i nigdy się już nie powtarzają (są jednorazowe), ale otrzymujesz ALERT maila aby niczego nie pominąć.
        </p>
        <p>
            W każdym momencie możesz też wypisać się ze strefy i nie otrzymywać żadnych powiadomień.
        </p>
        <p>
            Zapraszamy do strefy!
        </p>
    </section>

    <h2 class="lowPrices__bigHeader">
        Zapisy do STREFY NISKICH CEN
    </h2>
    <section class="lowPrices">
        <?php
            echo do_shortcode('[contact-form-7 id="138" title="Formularz 1"]');
        ?>
    </section>
</main>

<?php
get_footer();
?>
