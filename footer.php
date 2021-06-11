</div><!-- .content -->
<footer class="footer">
    <div class="footer__col">
        <h3 class="footer__header">
            Przydatne linki
        </h3>
        <ul class="footer__list">
            <li class="footer__list__item">
                <a href="https://kursy.edukacenter.pl/">
                    Kursy
                </a>
            </li>
            <li class="footer__list__item">
                <a href="https://kursy.edukacenter.pl/">
                    Certyfikaty
                </a>
            </li>
            <li class="footer__list__item">
                <a href="http://skylo-test3.pl/blog">
                    Blog
                </a>
            </li>
            <li class="footer__list__item">
                <a href="http://skylo-test3.pl/o-nas">
                    O nas
                </a>
            </li>
        </ul>

        <h3 class="footer__header marginTop">
            Kontakt
        </h3>
        <ul class="footer__list">
            <li class="footer__list__item--contact">
                <img class="footer__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/location.svg'; ?>" alt="adres" />
                ul. Michałkowicka 28, 41-100 Siemianowice Śląskie
            </li>
            <li class="footer__list__item--contact">
                <img class="footer__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone.svg'; ?>" alt="telefon" />
                32 630 43 59
            </li>
            <li class="footer__list__item--contact">
                <img class="footer__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail.svg'; ?>" alt="mail" />
                szkolenia@edukacenter.pl
            </li>
        </ul>
    </div>

    <div class="footer__col">
        <h3 class="footer__header">
            Zapisz się do naszego newslettera
        </h3>

        <form class="footer__form">
            <label class="footer__label">
                <input class="footer__input" placeholder="Adres email" />
            </label>
            <button class="button--footer">
                Zapisuję się
            </button>
        </form>

        <h3 class="footer__header marginTop">
            Polecane kursy
        </h3>
        <ul class="footer__list">
            <li class="footer__list__item">
                <a href="https://kursy.edukacenter.pl/szkolenia/zycie-roslin/">
                    Życie roślin
                </a>
            </li>
            <li class="footer__list__item">
                <a href="https://kursy.edukacenter.pl/szkolenia/karty-do-czytania-sylabowego/">
                    Karty do czytania sylabowego
                </a>
            </li>
            <li class="footer__list__item">
                <a href="https://kursy.edukacenter.pl/szkolenia/dawniej-i-dzis/">
                    Dawniej i dziś
                </a>
            </li>
        </ul>
    </div>

    <div class="footer__col">
        <h3 class="footer__header text-right">
            Śledź nas w mediach społecznościowcyh
        </h3>
        <div class="footer__socialMedia">
            <a class="footer__socialMedia__link" href="https://www.facebook.com/szkoleniaeduka" target="_blank">
                <img class="footer__socialMedia__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/facebook.svg'; ?>" alt="facebook" />
            </a>
            <a class="footer__socialMedia__link" href="https://www.instagram.com/edukacenter_pl/" target="_blank">
                <img class="footer__socialMedia__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/instagram.svg'; ?>" alt="instagram" />
            </a>
        </div>

        <div class="footer__data">
            <h5><b>EDUKA CENTER</b> Michałkowicka 28</h5>
            <h5>41-100 Siemianowice Śląskie</h5>
            <h5><b>NIP</b> 6272555867</h5>
            <h5><b>REGON</b> 241073311</h5>
            <h5><b>BNP Paribas</b>: 04 1750 0012 0000 0000 3221 0821</h5>
        </div>
    </div>
</footer>
<aside class="afterFooter">
    <h6>Copyright © 2021 Eduka Center</h6>
    <h6>Projekt i realizacja <a href="https://skylo.pl">skylo.pl</a></h6>
</aside>
</div><!-- .container-fluid -->

<?php wp_footer(); ?>

</body>
</html>
