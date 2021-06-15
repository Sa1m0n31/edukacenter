<?php
get_header();
?>

<main class="edukacenterPage">
    <h1 class="edukacenterPage__header">
        <?php echo the_title(); ?>
    </h1>

    <div class="faq">
        <h2 class="faq__header">
            Problem z hasłem
        </h2>
       <div class="faq__item">
           <button class="faq__question" onclick="faqToggle(1, 1)">
               Jak otrzymać hasło do logowania?
               <span class="plusMinus">
                   +
               </span>
           </button>
           <p class="faq__text">
               Po zapisie otrzymujesz od nas na maila hasło i login (login to twój adres e-mail). Sprawdź SPAM z dnia zapisu. Może zapisałeś się wcześniej a opłaciłeś kilka dni później – w takiej sytuacji patrz na datę zapisu nie zapłaty.
           </p>
       </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(1, 2)">
                Nie otrzymałem hasła na maila. Co teraz?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Sprawdź uważnie swoją skrzynkę SPAM oraz folder OFERTY/INNE. Sprawdź również SPAM z daty zapisu ( nie zapłaty jeśli to nastąpiło w inny dzień )
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(1, 3)">
                Nie mam hasła w spamie
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Jeśli nadal z jakiegoś powodu nie masz naszego maila z hasłem w SPAMIE, możesz hasło odzyskać samemu. Otwórz zakładkę ZALOGUJ

                i na dole okienka kliknij ” nie pamiętasz hasła?”

                Wpisz tam swój adres e-mail jaki wpisywałeś przy zamówieniu – otrzymasz link do resetu i ustawienia hasła samodzielnie.
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(1, 4)">
                Nie dostaję od Was żadnych maili. Dlaczego?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Upewnij się, że w formularzu zapisu wpisałeś prawidłowy adres e-mail. Czasem zdarzają się literówki i system zapisał nieprawidłowy adres e-mail. W takim przypadku nie otrzymasz żadnych powiadomień i musisz skontaktować się z nami  pod adresem: szkolenia@edukacenter.pl
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(1, 5)">
                Hasło, które otrzymałam jest nieprawidłowe. Co mam zrobić?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Upewnij się, że przepisujesz hasło prawidłowo, jednak my zalecamy, aby je kopiować w całości (gdyż jest one skomplikowane). Jeśli nadal pojawia się błąd najlepiej wygeneruj sobie nowe hasło. Jak to zrobić? Pod oknem gdzie się logujesz znajdziesz napis ” nie pamiętasz hasła?”

                Kliknij w ten napis i wpisz swój adres e-mail, a system wyśle Ci instrukcję jak wygenerować nowe hasło.
            </p>
        </div>
    </div>

    <div class="faq">
        <h2 class="faq__header">
            Dostęp do kursu/Pdf-ów/e-book
        </h2>
        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(2, 1)">
                Gdzie znajdę mój kurs/materiały PDF?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Po zalogowaniu się ZALOGUJ SIĘ w czarnym MENU – zakładka MÓJ DOSTĘP.
            </p>
        </div>
    </div>

    <div class="faq">
        <h2 class="faq__header">
            Certyfikaty
        </h2>
        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(3, 1)">
                Gdzie znajdę mój certyfikat?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Zaświadczenie możesz wygenerować sobie samemu w PDF w zakładce CERTYFIKATY ( po zalogowaniu oraz po odznaczeniu każdej lekcji jako ukończona ). Zakładkę znajdziesz w MENU certyfikaty.

                Wersja do pobrania PDF jest w wersji podstawowej, na której widnieje twoje imię i nazwisko oraz temat szkolenia, data a także pieczątki. Zaświadczenie jest na druku MEN.

                Wersję rozszerzoną w formie papierowej – dodatkowo płatną dla chętnych – można uzyskać na zamówienie.
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(3, 2)">
                Nie generuje się mój certyfikat. Co teraz?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Zaświadczenie powinno się wygenerować jeśli przerobiłaś(łeś) każdą lekcja i odznaczyłaś (łeś) materiał jako Ukończony. Jeśli nadal jest problem napisz na szkolenia@edukacenter.pl
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(3, 3)">
                Gdzie mogę zobaczyć wzór certyfikatu?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Wyślij do nas taką prośbę mailowo a w załączniku wyślemy Ci wzór zaświadczenia w wersji podstawowej oraz w wersji rozszerzonej ( wersja rozszerzona dodatkowo płatna w formie papierowej , wersja podstawowa pdf w ramach kursu )

                Nasz mail: szkolenia@edukacenter.pl
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(3, 4)">
                Prawo wydawania zaświadczeń MEN
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                „Zaświadczenie o ukończeniu ” to dokument wydawany po ukończeniu kursu, szkolenia. Tylko placówki objęte systemem oświaty mają prawo wydawania zaświadczeń potwierdzających uzyskanie lub uzupełnienie przez osoby dorosłe wiedzy, umiejętności czy kwalifikacji zawodowych w formach pozaszkolnych, uprawniając do pracy w zakresie objętym kursem. EDUKA CENTER ma prawo wydać takie zaświadczenie
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(3, 5)">
                Regulacje prawne, placówka oświatowa i nadzór pedagogiczny
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                „Zaświadczenie o ukończeniu kursu. szkolenia” wydawane jest na  podstawie przepisów rozporządzenia Ministra Edukacji Narodowej z dnia 19 marca 2019 r. w sprawie kształcenia ustawicznego w formach pozaszkolnych (Dz. U. z 2019 r. poz. 652).

                Placówka oświatowa i nadzór pedagogiczny

                Działalność szkoleniowa EDUKA CENTER jest objęta systemem oświaty. Szkolenia i kursy mają zapewniony nadzór pedagogiczny i odbywają się pod kuratelą Kuratorium Oświaty.
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(3, 6)">
                Jaki jest koszt dodatkowego certyfikatu i jak go dostanę?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Jeśli zechcesz zamówić dodatkowy certyfikat w wersji rozszerzonej to koszt wynosi 35 zł. Przesyłamy go do wybranego przez Ciebie paczkomatu. Wzór wersji rozszerzonej możesz zobaczyć po zalogowaniu w swój kurs lub wysłać do nas prośbę na maila w celu przesłania wzoru
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(3, 7)">
                Jak mogę zamówić certyfikat w wersji papierowej?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Aby zamówić certyfikat w wersji papierowej należy mieć już wykupiony dostep do danego kursu. Tam w zakładce POBIERZ CERTYFIKAT znajdują się szczegółowe informacje oraz link do płatnego formularza aby zamówić takie zaświadczenie
            </p>
        </div>
    </div>

    <div class="faq">
        <h2 class="faq__header">
            Inne
        </h2>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(4, 1)">
                Czy wystawiacie faktury?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Tak wystawiamy paragony i faktury. Zaraz po zapisaniu się na kurs i opłaceniu faktura/paragon przyjdzie w formie pdf na wskazany adres e-mail
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(4, 2)">
                Potrzebuję fakturę z terminem płatności
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Wystawiamy pro formę z terminem płatności. Musisz jednak pamiętać, że dostęp do kursu otrzymasz dopiero po opłaceniu pro formy. Abyśmy ją przesłali musisz wysłać nam dane do jej wystawienia na adres szkolenia@edukacenter.pl
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(4, 3)">
                Chcę opłacić przelewem tradycyjnym, poproszę o dane do przelewu
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                EDUKA CENTER ul. Michałkowicka 28, 41-100 Siemianowice Śląskie BNP Paribas, SWIFT: PLN  04 1750 0012 0000 0000 3221 0821

                Pamiętaj, że jak dokonasz przelewy tradycyjnego musisz poczekać na zaksięgowanie się należności dopiero po tym czasie otrzymasz dostęp. Wyślij nam również potwierdzenie wpłaty na maila szkolenia@edukacenter.pl
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(4, 4)">
                Potrzebuję się z Wami skontaktować, jak mogę to zrobić?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Preferujemy kontakt mailowy szkolenia@edukacenter.pl

                Gwarantujemy, że odpowiadamy na każdego maila wysłanego do nas, zwykle od poniedziałku do piątku do max 72h
            </p>
        </div>

        <div class="faq__item">
            <button class="faq__question" onclick="faqToggle(4, 5)">
                Jak mogę zamówić certyfikat w wersji papierowej?
                <span class="plusMinus">
                   +
               </span>
            </button>
            <p class="faq__text">
                Aby zamówić certyfikat w wersji papierowej należy mieć już wykupiony dostep do danego kursu. Tam w zakładce POBIERZ CERTYFIKAT znajdują się szczegółowe informacje oraz link do płatnego formularza aby zamówić takie zaświadczenie
            </p>
        </div>
    </div>
</main>



<?php
get_footer();
?>