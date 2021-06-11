<?php
get_header();
?>

<main class="edukacenterPage">
    <h1 class="edukacenterPage__header">
        <?php echo the_title(); ?>
    </h1>

    <div class="aboutUs__content">
        <div class="aboutUs__left mobileOrder-2">
            <?php echo the_content(); ?>
        </div>
        <div class="aboutUs__right mobileOrder-1 aboutUs__imgWrapper">
            <img class="aboutUs__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/o-nas.png'; ?>" alt="o-nas" />
        </div>
    </div>

    <div class="aboutUs__content">
        <div class="aboutUs__left aboutUs__imgWrapper">
            <img class="aboutUs__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/o-nas-2.png'; ?>" alt="o-nas" />
        </div>
        <div class="aboutUs__right">
            <p>
                Współpracujemy również z Dorotą Zawadzką – SUPER NIANIĄ – która rekomenduje nasz kurs na Opiekuna w żłobku <a target="_blank" href="https://opiekunwzlobku.pl/">ZOBACZ KURS</a>
            </p>
            <p>
                Nasza Placówka jest wpisana również do Rejestru Instytucji Szkoleniowych a to oznacza, że możesz ubiegać się o dofinansowanie z Urzędu Pracy – <a href="http://stor.praca.gov.pl/portal/#/ris/wyszukiwarka/szczegolyRis?id=47623" target="_blank">Zobacz tutaj wpis</a>
            </p>
            <p>
                Zapraszamy Cię również do naszej grupy na fb: Moje Małe Montessori w domu i na nasze oficjalne profile:  <a target="_blank" href="https://www.facebook.com/szkoleniaeduka">Facebook</a> i <a target="_blank" href="https://www.instagram.com/edukacenter_pl/">Instagram</a>
            </p>
        </div>
    </div>
</main>

<?php
get_footer();
?>