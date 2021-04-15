<?php
    $promoTitle = 'Schlüsseldienst in der Nähe';
    $promoDesc = 'Unser 24h Schlüsseldienst hilft Ihnen jederzeit sofort bei Ihrem Problem!';

    $phoneLink = 'tel:89287888888';
    $phoneText = '8(928)788-88-88';

    $advantagesFirstTitle = 'Standort';
    $advantagesFirstDescr = 'Wir sind in Ihrer Nähe';
    $advantagesSecondTitle = 'Geprüft und Qualifiziert';
    $advantagesSecondDescr = 'Handwerkerkammer Mitglied';
    $advantagesThirdTitle = 'Blitzschnell vor Ort';
    $advantagesThirdDescr = 'In 20 - 40 min. vor Ort';

    $serviceFirstTitle = 'Aufsperrdienst';
    $serviceFirstText = 'Unser speziell ausgebildetes Team öffnet problemlos zugefallene und versperrte Türen. Wir bieten Ihnen zu 99% schadenfreie Öffnungen an.
    Sie können innerhalb von 20-30 min. mit einem unserer Mitarbeiter rechnen.';
    $serviceSecondTitle = 'Tresoröffnung';
    $serviceSecondText = 'Unsere Mitarbeiter sind auf alle Sicherheitsstufen der Tresoröffnung spezialisiert. Zu 95% werden die Tresoröffnungen beschädigungsfrei durchgeführt. Neben der Öffnung von Tresoren bieten wir auch noch die Reparatur an.';
    $serviceThirdTitle = 'Türöffnung';
    $serviceThirdText = 'Zugefallene und versperrte Türen zu öffnen ist für unser Team kein Problem! Unser Team wird Sie mit Ihrer Pünktlichkeit und dem sauberen Arbeitsumgang überzeugen!
    Rufen Sie uns an und überzeugen Sie sich selbst!';

    $aboutUsText = 'Sie müssen in Ihre Wohnung, Ihr Zuhause oder Ihr Auto, aber Sie wurden ausgesperrt? Wir bieten Ihnen Dienste von professionellen Schlossern, die Sie so schnell wie möglich aus Ihren Schwierigkeiten herausholen können. Wohn-, Geschäftsgebäude und Autos werden von zertifizierten Technikern abgedeckt.<br><br>
    Haftungsausschluss.';

    $reviewsFirstName = 'Angela Bauer';
    $reviewsFirstText = 'Ich war auf dem Weg zur Arbeit als mir die Türe zugefallen ist. Der Schlüsseldienst kam zum Glück innerhalb von 20 Minuten an, da ich mich nicht verspüren wollte hat der Mitarbeiter so schnell wie möglich die Türe geöffnet. Super Preis!  Danke für die schnelle Hilfe!';
    $reviewsSecondName = 'Thomas Specht';
    $reviewsSecondText = 'Dieser Schlüsseldienst ist sehr empfehlenswert! Sehr kinderfreundlich, rasch und noch dazu eine Türöffnung ohne Beschädigung. Vielen Dank!';
    $reviewsThirdName = 'Andreas Martin';
    $reviewsThirdText = 'Leider ist durch einen Windstoß meine Türe zugefallen, ich war panisch und brauchte sofort Hilfe. Der Schlüsseldienst kam sehr schnell und leistete Top Arbeit. Empfehlenswert!';

    $questionFirst = 'Wie finde ich den besten Schlosser?';
    $answerFirst = 'Sie sollten zuerst schauen welche Art von Dienstleistung Sie benötigen und ob der von Ihnen ausgewählte Schlüsseldienst auch diese gewünschte Leistung erbringen kann.
    Sie profitieren immer davon wenn Sie wissen was Sie von Ihrem technischen Schloss benötigen, ob Sie von zu Hause ausgesperrt sind oder versehentlich ein Schloss aufgebrochen haben.';
    $questionSecond = 'Was kann ein Schlosser tun?';
    $answerSecond = 'Ein professioneller Schlosser ist jemand, der für die Arbeit mit dem vollständigen Werkzeug und Material ausgestattet ist um Schlösser von Alltagsgegenständen wie Türen, Fenstern und Safes zu bedienen.';
    $questionThird = 'Was ist der durchschnittliche Preis für einen Schlosstausch?';
    $answerThird = 'Der durchschnittliche Preis kann je nach Bedarf Ihres Schlosses ab 49€ Betriebskosten + MwSt. sehr unterschiedlich sein. Falls Sie ausgesperrt wurden oder zusätzliche Schlösser an Ihren Türen zu Hause benötigen um für zusätzliche Sicherheit zu sorgen könnte je nach Ihrer Situation der Preis erheblich variieren.';
    $questionFourth = 'Was sind verschieden Arten von Schlüsseldienst Technikern?';
    $answerFourth = 'Professionelle Schlüsseldienst Teams bieten eine Reihe von verschiedenen Techniker-Schlosser und Schlosser-Dienstleistungen. 
    Unser Team bietet Ihnen einen 24h Service mit einem top ausgebildetem Team!';
    $questionFiveth = 'Was erwarten Sie vom Technikerservice?';
    $answerFiveth = 'Sie können von unserem Team pünktliche, zuverlässige und professionelle Dienstleistungen erwarten. Unser Team sorgt für Ihre Zufriedenheit!';
    $questionSixth = 'Was ist unser Schlosser-Unternehmensprogramm?';
    $answerSixth = 'Wir sind 24 Stunden am Tag, 7 Tage die Woche für Sie da. Rufen Sie unser Team jederzeit an!';
?>

<?php
require_once('./header.php');
require_once('./promo.php');
require_once('./advantages.php');
require_once('./service.php');
require('./ourContacts.php');
require_once('./aboutUs.php');
require_once('./reviews.php');
require('./ourContacts.php');
require_once('./question.php');
?>
    <section class="branches">
        <h2 class="branches__title">Standorte</h2>
        <div class="container">
            <div class="col-12 branches__map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac9a65c2bc1438535cbef374ec37fa71fe2f18c482e4168e6faa9cfb77a52e937&amp;width=100%25&amp;height=600&amp;lang=eu_EU&amp;scroll=false"></script>
            </div>
            <div class="col-12 branches__links">
                <ul>
                    <li><a href="./berlin.php"><img src="./img/arrow.svg" alt="arrow">Berlin</a></li>
                    <li><a href="./hamburg.php"><img src="./img/arrow.svg" alt="arrow">Hamburg</a></li>
                    <li><a href="./münchen.php"><img src="./img/arrow.svg" alt="arrow">München</a></li>
                    <li><a href="./köln.php"><img src="./img/arrow.svg" alt="arrow">Köln</a></li>
                    <li><a href="./frankfurt.php"><img src="./img/arrow.svg" alt="arrow">Frankfurt</a></li>
                    <li><a href="./stuttgart.php"><img src="./img/arrow.svg" alt="arrow">Stuttgart</a></li>
                    <li><a href="./dortmund.php"><img src="./img/arrow.svg" alt="arrow">Dortmund</a></li>
                    <li><a href="./essen.php"><img src="./img/arrow.svg" alt="arrow">Essen</a></li>
                    <li><a href="./düsseldorf.php"><img src="./img/arrow.svg" alt="arrow">Düsseldorf</a></li>
                    <li><a href="./bremen.php"><img src="./img/arrow.svg" alt="arrow">Bremen</a></li>
                    <li><a href="./aachen.php"><img src="./img/arrow.svg" alt="arrow">Aachen</a></li>//
                    <li><a href="./wolfsburg.php"><img src="./img/arrow.svg" alt="arrow">Wolfsburg</a></li>
                    <li><a href="./wuerzburg.php"><img src="./img/arrow.svg" alt="arrow">Wuerzburg</a></li>
                    <li><a href="./paderborn.php"><img src="./img/arrow.svg" alt="arrow">Paderborn</a></li>
                    <li><a href="./potsdam.php"><img src="./img/arrow.svg" alt="arrow">Potsdam</a></li>
                    <li><a href="./prenzlauerBergBezirk.php"><img src="./img/arrow.svg" alt="arrow">Prenzlauer Berg Bezirk</a></li>
                    <li><a href="./oldenburg.php"><img src="./img/arrow.svg" alt="arrow">Oldenburg</a></li>
                    <li><a href="./ludwigshafenAmRhein.php"><img src="./img/arrow.svg" alt="arrow">Ludwigshafen am Rhein</a></li>
                    <li><a href="./osnabrueck.php"><img src="./img/arrow.svg" alt="arrow">Osnabrueck</a></li>
                    <li><a href="./muelheim.php"><img src="./img/arrow.svg" alt="arrow">Muelheim</a></li>
                    <li><a href="./saarbruecken.php"><img src="./img/arrow.svg" alt="arrow">Saarbruecken</a></li>
                    <li><a href="./hamm.php"><img src="./img/arrow.svg" alt="arrow">Hamm</a></li>
                    <li><a href="./rostock.php"><img src="./img/arrow.svg" alt="arrow">Rostock</a></li>
                    <li><a href="./harburg.php"><img src="./img/arrow.svg" alt="arrow">Harburg</a></li>
                    <li><a href="./luebeck.php"><img src="./img/arrow.svg" alt="arrow">Luebeck</a></li>
                    <li><a href="./oberhausen.php"><img src="./img/arrow.svg" alt="arrow">Oberhausen</a></li>
                    <li><a href="./magdeburg.php"><img src="./img/arrow.svg" alt="arrow">Magdeburg</a></li>
                    <li><a href="./hamburg-Mitte.php"><img src="./img/arrow.svg" alt="arrow">Hamburg-Mitte</a></li>
                    <li><a href="./krefeld.php"><img src="./img/arrow.svg" alt="arrow">Krefeld</a></li>
                    <li><a href="./altona.php"><img src="./img/arrow.svg" alt="arrow">Altona</a></li>
                    <li><a href="./augsburg.php"><img src="./img/arrow.svg" alt="arrow">Augsburg</a></li>
                    <li><a href="./gelsenkirchen.php"><img src="./img/arrow.svg" alt="arrow">Gelsenkirchen</a></li>
                    <li><a href="./wiesbaden.php"><img src="./img/arrow.svg" alt="arrow">Wiesbaden</a></li>
                    <li><a href="./karlsruhe.php"><img src="./img/arrow.svg" alt="arrow">Karlsruhe</a></li>
                    <li><a href="./bochum-Hordel.php"><img src="./img/arrow.svg" alt="arrow">Bochum-Hordel</a></li>
                    <li><a href="./nuernberg.php"><img src="./img/arrow.svg" alt="arrow">Nuernberg</a></li>
                </ul>
                <ul>
                    <li><a href="./hannover.php"><img src="./img/arrow.svg" alt="arrow">Hannover</a></li>
                    <li><a href="./duisburg.php"><img src="./img/arrow.svg" alt="arrow">Duisburg</a></li>
                    <li><a href="./leipzig.php"><img src="./img/arrow.svg" alt="arrow">Leipzig</a></li>
                    <li><a href="./nürnberg.php"><img src="./img/arrow.svg" alt="arrow">Nürnberg</a></li>
                    <li><a href="./dresden.php"><img src="./img/arrow.svg" alt="arrow">Dresden</a></li>
                    <li><a href="./bochum.php"><img src="./img/arrow.svg" alt="arrow">Bochum</a></li>
                    <li><a href="./wuppertal.php"><img src="./img/arrow.svg" alt="arrow">Wuppertal</a></li>
                    <li><a href="./bielefeld.php"><img src="./img/arrow.svg" alt="arrow">Bielefeld</a></li>
                    <li><a href="./bonn.php"><img src="./img/arrow.svg" alt="arrow">Bonn</a></li>
                    <li><a href="./mannheim.php"><img src="./img/arrow.svg" alt="arrow">Mannheim</a></li>
                    <li><a href="./braunschweig.php"><img src="./img/arrow.svg" alt="arrow">Braunschweig</a></li>
                    <li><a href="./regensburg.php"><img src="./img/arrow.svg" alt="arrow">Regensburg</a></li>
                    <li><a href="./darmstadt.php"><img src="./img/arrow.svg" alt="arrow">Darmstadt</a></li>
                    <li><a href="./heidelberg.php"><img src="./img/arrow.svg" alt="arrow">Heidelberg</a></li>
                    <li><a href="./bezirkKreuzberg.php"><img src="./img/arrow.svg" alt="arrow">Bezirk Kreuzberg</a></li>
                    <li><a href="./neuss.php"><img src="./img/arrow.svg" alt="arrow">Neuss</a></li>
                    <li><a href="./leverkusen.php"><img src="./img/arrow.svg" alt="arrow">Leverkusen</a></li>
                    <li><a href="./solingen.php"><img src="./img/arrow.svg" alt="arrow">Solingen</a></li>
                    <li><a href="./neukoelln.php"><img src="./img/arrow.svg" alt="arrow">Neukoelln</a></li>
                    <li><a href="./herne.php"><img src="./img/arrow.svg" alt="arrow">Herne</a></li>
                    <li><a href="./mainz.php"><img src="./img/arrow.svg" alt="arrow">Mainz</a></li>
                    <li><a href="./kassel.php"><img src="./img/arrow.svg" alt="arrow">Kassel</a></li>
                    <li><a href="./hagen.php"><img src="./img/arrow.svg" alt="arrow">Hagen</a></li>
                    <li><a href="./erfurt.php"><img src="./img/arrow.svg" alt="arrow">Erfurt</a></li>
                    <li><a href="./freiburg.php"><img src="./img/arrow.svg" alt="arrow">Freiburg</a></li>
                    <li><a href="./neueNeustadt.php"><img src="./img/arrow.svg" alt="arrow">Neue Neustadt</a></li>
                    <li><a href="./kiel.php"><img src="./img/arrow.svg" alt="arrow">Kiel</a></li>
                    <li><a href="./halle.php"><img src="./img/arrow.svg" alt="arrow">Halle(Saale)</a></li>
                    <li><a href="./chemnitz.php"><img src="./img/arrow.svg" alt="arrow">Chemnitz</a></li>
                    <li><a href="./eimsbuettel.php"><img src="./img/arrow.svg" alt="arrow">Eimsbuettel</a></li>
                    <li><a href="./moenchengladbach.php"><img src="./img/arrow.svg" alt="arrow">Moenchengladbach</a></li>
                    <li><a href="./münster.php"><img src="./img/arrow.svg" alt="arrow">Münster</a></li>
                    <li><a href="./hamburg-Nord.php"><img src="./img/arrow.svg" alt="arrow">Hamburg-Nord</a></li>
                    <li><a href="./marienthal.php"><img src="./img/arrow.svg" alt="arrow">Marienthal</a></li>
                    <li><a href="./wandsbek.php"><img src="./img/arrow.svg" alt="arrow">Wandsbek</a></li>
                </ul>
            </div>
        </div>
    </section>
<?php
require_once('./payment.php');
require_once('./footer.php');
?>