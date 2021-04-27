<?php
    $promoTitle = 'Schlüsseldienst in der Nähe';
    $promoDesc = 'Unser 24h Schlüsseldienst hilft Ihnen jederzeit sofort bei Ihrem Problem!';

    $url = 'https://schluesseldienst-24std.com/index.php';
    $metaTitle = 'Locksmith DE';
    $metaDescr = 'We work with locksmith in Germany';

    $phoneLink = 'tel:89287888888';
    $phoneText = '8(928)788-88-88';

    $isHomePage = true;

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
            <div class="col-12 branches__links">
                <ul>
                    <li><a href="./berlin.php"><img src="./img/arrow.svg" alt="arrow">Berlin</a></li>
                    <li><a href="./hamburg.php"><img src="./img/arrow.svg" alt="arrow">Hamburg</a></li>
                    <li><a href="./muenchen.php"><img src="./img/arrow.svg" alt="arrow">München</a></li>
                    <li><a href="./koeln.php"><img src="./img/arrow.svg" alt="arrow">Köln</a></li>
                    <li><a href="./frankfurt.php"><img src="./img/arrow.svg" alt="arrow">Frankfurt</a></li>
                    <li><a href="./stuttgart.php"><img src="./img/arrow.svg" alt="arrow">Stuttgart</a></li>
                    <li><a href="./dortmund.php"><img src="./img/arrow.svg" alt="arrow">Dortmund</a></li>
                    <li><a href="./essen.php"><img src="./img/arrow.svg" alt="arrow">Essen</a></li>
                    <li><a href="./duesseldorf.php"><img src="./img/arrow.svg" alt="arrow">Düsseldorf</a></li>
                    <li><a href="./bremen.php"><img src="./img/arrow.svg" alt="arrow">Bremen</a></li>
                    <li><a href="./aachen.php"><img src="./img/arrow.svg" alt="arrow">Aachen</a></li>
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
                    <li><a href="./muelheim-an-der-Ruhr.php"><img src="./img/arrow.svg" alt="arrow">Mülheim an der Ruhr</a></li>
                    <li><a href="./bergisch-Gladbach.php"><img src="./img/arrow.svg" alt="arrow">Bergisch Gladbach</a></li>
                    <li><a href="./remscheid.php"><img src="./img/arrow.svg" alt="arrow">Remscheid</a></li>
                    <li><a href="./siegen.php"><img src="./img/arrow.svg" alt="arrow">Siegen</a></li>
                    <li><a href="./witten.php"><img src="./img/arrow.svg" alt="arrow">Witten</a></li>
                    <li><a href="./dueren.php"><img src="./img/arrow.svg" alt="arrow">Düren</a></li>
                    <li><a href="./luenen.php"><img src="./img/arrow.svg" alt="arrow">Lünen</a></li>
                    <li><a href="./velbert.php"><img src="./img/arrow.svg" alt="arrow">Velbert</a></li>
                    <li><a href="./viersen.php"><img src="./img/arrow.svg" alt="arrow">Viersen</a></li>
                    <li><a href="./gladbeck.php"><img src="./img/arrow.svg" alt="arrow">Gladbeck</a></li>
                    <li><a href="./dorsten.php"><img src="./img/arrow.svg" alt="arrow">Dorsten</a></li>
                    <li><a href="./arnsberg.php"><img src="./img/arrow.svg" alt="arrow">Arnsberg</a></li>
                    <li><a href="./luedenscheid.php"><img src="./img/arrow.svg" alt="arrow">Lüdenscheid</a></li>
                    <li><a href="./lippstadt.php"><img src="./img/arrow.svg" alt="arrow">Lippstadt</a></li>
                    <li><a href="./kerpen.php"><img src="./img/arrow.svg" alt="arrow">Kerpen</a></li>
                    <li><a href="./dormagen.php"><img src="./img/arrow.svg" alt="arrow">Dormagen</a></li>
                    <li><a href="./herten.php"><img src="./img/arrow.svg" alt="arrow">Herten</a></li>
                    <li><a href="./wesel.php"><img src="./img/arrow.svg" alt="arrow">Wesel</a></li>
                    <li><a href="./langenfeld.php"><img src="./img/arrow.svg" alt="arrow">Langenfeld</a></li>
                    <li><a href="./euskirchen.php"><img src="./img/arrow.svg" alt="arrow">Euskirchen</a></li>
                    <li><a href="./stolberg.php"><img src="./img/arrow.svg" alt="arrow">Stolberg</a></li>
                    <li><a href="./sankt-Augustin.php"><img src="./img/arrow.svg" alt="arrow">Sankt Augustin</a></li>
                    <li><a href="./hattingen.php"><img src="./img/arrow.svg" alt="arrow">Hattingen</a></li>
                    <li><a href="./pulheim.php"><img src="./img/arrow.svg" alt="arrow">Pulheim</a></li>
                    <li><a href="./ahlen.php"><img src="./img/arrow.svg" alt="arrow">Ahlen</a></li>
                    <li><a href="./kleve.php"><img src="./img/arrow.svg" alt="arrow">Kleve</a></li>
                    <li><a href="./gummersbach.php"><img src="./img/arrow.svg" alt="arrow">Gummersbach</a></li>
                    <li><a href="./erftstadt.php"><img src="./img/arrow.svg" alt="arrow">Erftstadt</a></li>
                    <li><a href="./rheda-Wiedenbrueck.php"><img src="./img/arrow.svg" alt="arrow">Rheda-Wiedenbrück</a></li>
                    <li><a href="./bornheim.php"><img src="./img/arrow.svg" alt="arrow">Bornheim</a></li>
                    <li><a href="./soest.php"><img src="./img/arrow.svg" alt="arrow">Soest</a></li>
                    <li><a href="./alsdorf.php"><img src="./img/arrow.svg" alt="arrow">Alsdorf</a></li>
                    <li><a href="./herzogenrath.php"><img src="./img/arrow.svg" alt="arrow">Herzogenrath</a></li>
                    <li><a href="./buende.php"><img src="./img/arrow.svg" alt="arrow">Bünde</a></li>
                    <li><a href="./erkrath.php"><img src="./img/arrow.svg" alt="arrow">Erkrath</a></li>
                    <li><a href="./erkelenz.php"><img src="./img/arrow.svg" alt="arrow">Erkelenz</a></li>
                    <li><a href="./borken.php"><img src="./img/arrow.svg" alt="arrow">Borken</a></li>
                    <li><a href="./heidelberg.php"><img src="./img/arrow.svg" alt="arrow">Heinsberg</a></li>
                    <li><a href="./koenigswinter.php"><img src="./img/arrow.svg" alt="arrow">Koenigswinter</a></li>
                    <li><a href="./lemgo.php"><img src="./img/arrow.svg" alt="arrow">Lemgo</a></li>
                    <li><a href="./loehne.php"><img src="./img/arrow.svg" alt="arrow">Loehne</a></li>
                    <li><a href="./mettmann.php"><img src="./img/arrow.svg" alt="arrow">Mettmann</a></li>
                    <li><a href="./niederkassel.php"><img src="./img/arrow.svg" alt="arrow">Niederkassel</a></li>
                    <li><a href="./greven.php"><img src="./img/arrow.svg" alt="arrow">Greven</a></li>
                    <li><a href="./warendorf.php"><img src="./img/arrow.svg" alt="arrow">Warendorf</a></li>
                    <li><a href="./wesseling.php"><img src="./img/arrow.svg" alt="arrow">Wesseling</a></li>
                    <li><a href="./emsdetten.php"><img src="./img/arrow.svg" alt="arrow">Emsdetten</a></li>
                    <li><a href="./portaWestfalica.php"><img src="./img/arrow.svg" alt="arrow">Porta Westfalica</a></li>
                    <li><a href="./wermelskirchen.php"><img src="./img/arrow.svg" alt="arrow">Wermelskirchen</a></li>
                    <li><a href="./kempen.php"><img src="./img/arrow.svg" alt="arrow">Kempen</a></li>
                    <li><a href="./goch.php"><img src="./img/arrow.svg" alt="arrow">Goch</a></li>
                    <li><a href="./geldern.php"><img src="./img/arrow.svg" alt="arrow">Geldern</a></li>
                    <li><a href="./juelich.php"><img src="./img/arrow.svg" alt="arrow">Jülich</a></li>
                    <li><a href="./oer-Erkenschwick.php"><img src="./img/arrow.svg" alt="arrow">Oer-Erkenschwick</a></li>
                    <li><a href="./emmerichAmRhein.php"><img src="./img/arrow.svg" alt="arrow">Emmerich am Rhein</a></li>
                    <li><a href="./werl"><img src="./img/arrow.svg" alt="arrow">Werl</a></li>
                    <li><a href="./lohmar.php"><img src="./img/arrow.svg" alt="arrow">Lohmar</a></li>
                    <li><a href="./ennepetal.php"><img src="./img/arrow.svg" alt="arrow">Ennepetal</a></li>
                    <li><a href="./werne.php"><img src="./img/arrow.svg" alt="arrow">Werne</a></li>
                    <li><a href="./toenisvorst.php"><img src="./img/arrow.svg" alt="arrow">Tönisvorst</a></li>
                    <li><a href="./oelde.php"><img src="./img/arrow.svg" alt="arrow">Oelde</a></li>
                    <li><a href="./roesrath.php"><img src="./img/arrow.svg" alt="arrow">Rösrath</a></li>
                    <li><a href="./wegberg.php"><img src="./img/arrow.svg" alt="arrow">Wegberg</a></li>
                    <li><a href="./leichlingen.php"><img src="./img/arrow.svg" alt="arrow">Leichlingen</a></li>
                    <li><a href="./geilenkirchen.php"><img src="./img/arrow.svg" alt="arrow">Geilenkirchen</a></li>
                    <li><a href="./neukirchen-Vluyn.php"><img src="./img/arrow.svg" alt="arrow">Neukirchen-Vluyn</a></li>
                    <li><a href="./baesweiler.php"><img src="./img/arrow.svg" alt="arrow">Baesweiler</a></li>
                    <li><a href="./schlossHolte-Stukenbrock.php"><img src="./img/arrow.svg" alt="arrow">Schloß Holte-Stukenbrock</a></li>
                    <li><a href="./heiligenhaus.php"><img src="./img/arrow.svg" alt="arrow">Heiligenhaus</a></li>
                    <li><a href="./badHonnef.php"><img src="./img/arrow.svg" alt="arrow">Bad Honnef</a></li>
                    <li><a href="./brilon.php"><img src="./img/arrow.svg" alt="arrow">Brilon</a></li>
                    <li><a href="./lennestadt.php"><img src="./img/arrow.svg" alt="arrow">Lennestadt</a></li>
                    <li><a href="./petershagen.php"><img src="./img/arrow.svg" alt="arrow">Petershagen</a></li>
                    <li><a href="./schmallenberg.php"><img src="./img/arrow.svg" alt="arrow">Schmallenberg</a></li>
                    <li><a href="./meckenheim.php"><img src="./img/arrow.svg" alt="arrow">Meckenheim</a></li>
                    <li><a href="./sprockhoevel.php"><img src="./img/arrow.svg" alt="arrow">Sprockhövel</a></li>
                    <li><a href="./olpe.php"><img src="./img/arrow.svg" alt="arrow">Olpe</a></li>
                    <li><a href="./uebach-Palenberg.php"><img src="./img/arrow.svg" alt="arrow">Übach-Palenberg</a></li>
                    <li><a href="./alfter.php"><img src="./img/arrow.svg" alt="arrow">Alfter</a></li>
                    <li><a href="./netphen.php"><img src="./img/arrow.svg" alt="arrow">Netphen</a></li>
                    <li><a href="./herdecke.php"><img src="./img/arrow.svg" alt="arrow">Herdecke</a></li>
                    <li><a href="./lengerich.php"><img src="./img/arrow.svg" alt="arrow">Lengerich</a></li>
                    <li><a href="./radevormwald.php"><img src="./img/arrow.svg" alt="arrow">Radevormwald</a></li>
                    <li><a href="./elsdorf.php"><img src="./img/arrow.svg" alt="arrow">Elsdorf</a></li>
                    <li><a href="./versmold.php"><img src="./img/arrow.svg" alt="arrow">Versmold</a></li>
                    <li><a href="./bueren.php"><img src="./img/arrow.svg" alt="arrow">Büren</a></li>
                    <li><a href="./lindlar.php"><img src="./img/arrow.svg" alt="arrow">Lindlar</a></li>
                    <li><a href="./wipperfuerth.php"><img src="./img/arrow.svg" alt="arrow">Wipperfürth</a></li>
                    <li><a href="./froendenberg.php"><img src="./img/arrow.svg" alt="arrow">Fröndenberg</a></li>
                    <li><a href="./enger.php"><img src="./img/arrow.svg" alt="arrow">Enger</a></li>
                    <li><a href="./senden.php"><img src="./img/arrow.svg" alt="arrow">Senden</a></li>
                    <li><a href="./hoerstel.php"><img src="./img/arrow.svg" alt="arrow">Hörstel</a></li>
                    <li><a href="./stadtlohn.php"><img src="./img/arrow.svg" alt="arrow">Stadtlohn</a></li>
                    <li><a href="./telgte.php"><img src="./img/arrow.svg" alt="arrow">Telgte</a></li>
                    <li><a href="./hiddenhausen.php"><img src="./img/arrow.svg" alt="arrow">Hiddenhausen</a></li>
                    <li><a href="./kuerten.php"><img src="./img/arrow.svg" alt="arrow">Kürten</a></li>
                    <li><a href="./nottulns.php"><img src="./img/arrow.svg" alt="arrow">Nottuln</a></li>
                    <li><a href="./waldbroel.php"><img src="./img/arrow.svg" alt="arrow">Waldbröl</a></li>
                    <li><a href="./rhede.php"><img src="./img/arrow.svg" alt="arrow">Rhede</a></li>
                    <li><a href="./schwalmtal.php"><img src="./img/arrow.svg" alt="arrow">Schwalmtal</a></li>
                    <li><a href="./badBerleburg.php"><img src="./img/arrow.svg" alt="arrow">Bad Berleburg</a></li>
                    <li><a href="./swisttal.php"><img src="./img/arrow.svg" alt="arrow">Swisttal</a></li>
                    <li><a href="./bergneustadt.php"><img src="./img/arrow.svg" alt="arrow">Bergneustadt</a></li>
                    <li><a href="./reichshof.php"><img src="./img/arrow.svg" alt="arrow">Reichshof</a></li>
                    <li><a href="./burscheid.php"><img src="./img/arrow.svg" alt="arrow">Burscheid</a></li>
                    <li><a href="./freudenberg.php"><img src="./img/arrow.svg" alt="arrow">Freudenberg</a></li>
                    <li><a href="./weilerswist.php"><img src="./img/arrow.svg" alt="arrow">Weilerswist</a></li>
                    <li><a href="./badMuenstereifel.php"><img src="./img/arrow.svg" alt="arrow">Bad Münstereifel</a></li>
                    <li><a href="./gescher.php"><img src="./img/arrow.svg" alt="arrow">Gescher</a></li>
                    <li><a href="./holzwickede.php"><img src="./img/arrow.svg" alt="arrow">Holzwickede</a></li>
                    <li><a href="./finnentrop.php"><img src="./img/arrow.svg" alt="arrow">Finnentrop</a></li>
                    <li><a href="./hoevelhof.php"><img src="./img/arrow.svg" alt="arrow">Hövelhof</a></li>
                    <li><a href="./straelen.php"><img src="./img/arrow.svg" alt="arrow">Straelen</a></li>
                    <li><a href="./brakel.php"><img src="./img/arrow.svg" alt="arrow">Brakel</a></li>
                    <li><a href="./halver.php"><img src="./img/arrow.svg" alt="arrow">Halver</a></li>
                    <li><a href="./kirchlengern.php"><img src="./img/arrow.svg" alt="arrow">Kirchlengern</a></li>
                    <li><a href="./brueggen.php"><img src="./img/arrow.svg" alt="arrow">Brüggen</a></li>
                    <li><a href="./drensteinfurt.php"><img src="./img/arrow.svg" alt="arrow">Drensteinfurt</a></li>
                    <li><a href="./simmerath.php"><img src="./img/arrow.svg" alt="arrow">Simmerath</a></li>
                    <li><a href="./hille.php"><img src="./img/arrow.svg" alt="arrow">Hille</a></li>
                    <li><a href="./odenthal.php"><img src="./img/arrow.svg" alt="arrow">Odenthal</a></li>
                    <li><a href="./reken.php"><img src="./img/arrow.svg" alt="arrow">Reken</a></li>
                    <li><a href="./hilchenbach.php"><img src="./img/arrow.svg" alt="arrow">Hilchenbach</a></li>
                    <li><a href="./spenge.php"><img src="./img/arrow.svg" alt="arrow">Spenge</a></li>
                    <li><a href="./chiemsee.php"><img src="./img/arrow.svg" alt="arrow">Chiemsee</a></li>
                    <li><a href="./guttenberg.php"><img src="./img/arrow.svg" alt="arrow">Guttenberg</a></li>
                    <li><a href="./tschirn.php"><img src="./img/arrow.svg" alt="arrow">Tschirn</a></li>
                    <li><a href="./ermershausen.php"><img src="./img/arrow.svg" alt="arrow">Ermershausen</a></li>
                    <li><a href="./willmars.php"><img src="./img/arrow.svg" alt="arrow">Willmars</a></li>
                    <li><a href="./hohenaltheim.php"><img src="./img/arrow.svg" alt="arrow">Hohenaltheim</a></li>
                    <li><a href="./ebershausen.php"><img src="./img/arrow.svg" alt="arrow">Ebershausen</a></li>
                    <li><a href="./gleiritsch.php"><img src="./img/arrow.svg" alt="arrow">Gleiritsch</a></li>
                    <li><a href="./philippsreut.php"><img src="./img/arrow.svg" alt="arrow">Philippsreut</a></li>
                    <li><a href="./hemmersheim.php"><img src="./img/arrow.svg" alt="arrow">Hemmersheim</a></li>
                    <li><a href="./riedenheim.php"><img src="./img/arrow.svg" alt="arrow">Riedenheim</a></li>
                    <li><a href="./aubstadt.php"><img src="./img/arrow.svg" alt="arrow">Aubstadt</a></li>
                </ul>
                <ul>
                    <li><a href="./hannover.php"><img src="./img/arrow.svg" alt="arrow">Hannover</a></li>
                    <li><a href="./duisburg.php"><img src="./img/arrow.svg" alt="arrow">Duisburg</a></li>
                    <li><a href="./leipzig.php"><img src="./img/arrow.svg" alt="arrow">Leipzig</a></li>
                    <li><a href="./nuernberg.php"><img src="./img/arrow.svg" alt="arrow">Nürnberg</a></li>
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
                    <li><a href="./moenchengladbach.php"><img src="./img/arrow.svg" alt="arrow">Mönchengladbach</a></li>
                    <li><a href="./muenster.php"><img src="./img/arrow.svg" alt="arrow">Münster</a></li>
                    <li><a href="./hamburg-Nord.php"><img src="./img/arrow.svg" alt="arrow">Hamburg-Nord</a></li>
                    <li><a href="./marienthal.php"><img src="./img/arrow.svg" alt="arrow">Marienthal</a></li>
                    <li><a href="./wandsbek.php"><img src="./img/arrow.svg" alt="arrow">Wandsbek</a></li>
                    <li><a href="./bottrop.php"><img src="./img/arrow.svg" alt="arrow">Bottrop</a></li>
                    <li><a href="./recklinghausen.php"><img src="./img/arrow.svg" alt="arrow">Recklinghausen</a></li>
                    <li><a href="./moers.php"><img src="./img/arrow.svg" alt="arrow">Moers</a></li>
                    <li><a href="./guetersloh.php"><img src="./img/arrow.svg" alt="arrow">Gütersloh</a></li>
                    <li><a href="./iserlohn.php"><img src="./img/arrow.svg" alt="arrow">Iserlohn</a></li>
                    <li><a href="./ratingen.php"><img src="./img/arrow.svg" alt="arrow">Ratingen</a></li>
                    <li><a href="./marl.php"><img src="./img/arrow.svg" alt="arrow">Marl</a></li>
                    <li><a href="./minden.php"><img src="./img/arrow.svg" alt="arrow">Minden</a></li>
                    <li><a href="./rheine.php"><img src="./img/arrow.svg" alt="arrow">Rheine</a></li>
                    <li><a href="./troisdorf.php"><img src="./img/arrow.svg" alt="arrow">Troisdorf</a></li>
                    <li><a href="./detmold.php"><img src="./img/arrow.svg" alt="arrow">Detmold</a></li>
                    <li><a href="./castrop-Rauxel.php"><img src="./img/arrow.svg" alt="arrow">Castrop-Rauxel</a></li>
                    <li><a href="./bocholt.php"><img src="./img/arrow.svg" alt="arrow">Bocholt</a></li>
                    <li><a href="./dinslaken.php"><img src="./img/arrow.svg" alt="arrow">Dinslaken</a></li>
                    <li><a href="./herford.php"><img src="./img/arrow.svg" alt="arrow">Herford</a></li>
                    <li><a href="./grevenbroich.php"><img src="./img/arrow.svg" alt="arrow">Grevenbroich</a></li>
                    <li><a href="./bergheim.php"><img src="./img/arrow.svg" alt="arrow">Bergheim</a></li>
                    <li><a href="./huerth.php"><img src="./img/arrow.svg" alt="arrow">Hürth</a></li>
                    <li><a href="./unna.php"><img src="./img/arrow.svg" alt="arrow">Unna</a></li>
                    <li><a href="./eschweiler.php"><img src="./img/arrow.svg" alt="arrow">Eschweiler</a></li>
                    <li><a href="./meerbusch.php"><img src="./img/arrow.svg" alt="arrow">Meerbusch</a></li>
                    <li><a href="./hilden.php"><img src="./img/arrow.svg" alt="arrow">Hilden</a></li>
                    <li><a href="./bad-Salzuflen.php"><img src="./img/arrow.svg" alt="arrow">Bad Salzuflen</a></li>
                    <li><a href="./menden.php"><img src="./img/arrow.svg" alt="arrow">Menden</a></li>
                    <li><a href="./frechen.php"><img src="./img/arrow.svg" alt="arrow">Frechen</a></li>
                    <li><a href="./ibbenbueren.php"><img src="./img/arrow.svg" alt="arrow">Ibbenbüren</a></li>
                    <li><a href="./willich.php"><img src="./img/arrow.svg" alt="arrow">Willich</a></li>
                    <li><a href="./bergkamen.php"><img src="./img/arrow.svg" alt="arrow">Bergkamen</a></li>
                    <li><a href="./badOeynhausen.php"><img src="./img/arrow.svg" alt="arrow">Bad Oeynhausen</a></li>
                    <li><a href="./gronau.php"><img src="./img/arrow.svg" alt="arrow">Gronau</a></li>
                    <li><a href="./hennef.php"><img src="./img/arrow.svg" alt="arrow">Hennef</a></li>
                    <li><a href="./duelmen.php"><img src="./img/arrow.svg" alt="arrow">duelmen</a></li>
                    <li><a href="./schwerte.php"><img src="./img/arrow.svg" alt="arrow">Schwerte</a></li>
                    <li><a href="./bruehl.php"><img src="./img/arrow.svg" alt="arrow">Bruehl</a></li>
                    <li><a href="./kaarst.php"><img src="./img/arrow.svg" alt="arrow">Kaarst</a></li>
                    <li><a href="./kamen.php"><img src="./img/arrow.svg" alt="arrow">Kamen</a></li>
                    <li><a href="./nettetal.php"><img src="./img/arrow.svg" alt="arrow">Nettetal</a></li>
                    <li><a href="./siegburg.php"><img src="./img/arrow.svg" alt="arrow">Siegburg</a></li>
                    <li><a href="./monheimAmRhein.php"><img src="./img/arrow.svg" alt="arrow">Monheim am Rhein</a></li>
                    <li><a href="./hueckelhoven.php"><img src="./img/arrow.svg" alt="arrow">Hueckelhoven</a></li>
                    <li><a href="./ahaus.php"><img src="./img/arrow.svg" alt="arrow">Ahaus</a></li>
                    <li><a href="./wuerselen.php"><img src="./img/arrow.svg" alt="arrow">Würselen</a></li>
                    <li><a href="./halternAmSee.php"><img src="./img/arrow.svg" alt="arrow">Haltern am See</a></li>
                    <li><a href="./kamp-Lintfort.php"><img src="./img/arrow.svg" alt="arrow">Kamp-Lintfort</a></li>
                    <li><a href="./beckum.php"><img src="./img/arrow.svg" alt="arrow">Beckum</a></li>
                    <li><a href="./coesfeld.php"><img src="./img/arrow.svg" alt="arrow">Coesfeld</a></li>
                    <li><a href="./voerde.php"><img src="./img/arrow.svg" alt="arrow">Voerde</a></li>
                    <li><a href="./lage.php"><img src="./img/arrow.svg" alt="arrow">Lage</a></li>
                    <li><a href="./datteln.php"><img src="./img/arrow.svg" alt="arrow">Datteln</a></li>
                    <li><a href="./steinfurt.php"><img src="./img/arrow.svg" alt="arrow">Steinfurt</a></li>
                    <li><a href="./hemer.php"><img src="./img/arrow.svg" alt="arrow">Hemer</a></li>
                    <li><a href="./korschenbroich.php"><img src="./img/arrow.svg" alt="arrow">Korschenbroich</a></li>
                    <li><a href="./delbrueck.php"><img src="./img/arrow.svg" alt="arrow">Delbrück</a></li>
                    <li><a href="./kreuztal.php"><img src="./img/arrow.svg" alt="arrow">Kreuztal</a></li>
                    <li><a href="./rheinberg.php"><img src="./img/arrow.svg" alt="arrow">Rheinberg</a></li>
                    <li><a href="./gevelsberg.php"><img src="./img/arrow.svg" alt="arrow">Gevelsberg</a></li>
                    <li><a href="./haan.php"><img src="./img/arrow.svg" alt="arrow">Haan</a></li>
                    <li><a href="./meschede.php"><img src="./img/arrow.svg" alt="arrow">Meschede</a></li>
                    <li><a href="./rietberg.php"><img src="./img/arrow.svg" alt="arrow">Rietberg</a></li>
                    <li><a href="./waltrop.php"><img src="./img/arrow.svg" alt="arrow">Waltrop</a></li>
                    <li><a href="./hoexter.php"><img src="./img/arrow.svg" alt="arrow">Hoexter</a></li>
                    <li><a href="./schwelm.php"><img src="./img/arrow.svg" alt="arrow">Schwelm</a></li>
                    <li><a href="./kevelaer.php"><img src="./img/arrow.svg" alt="arrow">Kevelaer</a></li>
                    <li><a href="./sundern.php"><img src="./img/arrow.svg" alt="arrow">Sundern</a></li>
                    <li><a href="./mechernich.php"><img src="./img/arrow.svg" alt="arrow">Mechernich</a></li>
                    <li><a href="./wetter.php"><img src="./img/arrow.svg" alt="arrow">Wetter</a></li>
                    <li><a href="./overath.php"><img src="./img/arrow.svg" alt="arrow">Overath</a></li>
                    <li><a href="./rheinbach.php"><img src="./img/arrow.svg" alt="arrow">Rheinbach</a></li>
                    <li><a href="./hamminkeln.php"><img src="./img/arrow.svg" alt="arrow">Hamminkeln</a></li>
                    <li><a href="./selm.php"><img src="./img/arrow.svg" alt="arrow">Selm</a></li>
                    <li><a href="./luebbecke.php"><img src="./img/arrow.svg" alt="arrow">Lübbecke</a></li>
                    <li><a href="./verl.php"><img src="./img/arrow.svg" alt="arrow">Verl</a></li>
                    <li><a href="./plettenberg.php"><img src="./img/arrow.svg" alt="arrow">Plettenberg</a></li>
                    <li><a href="./wiehl.php"><img src="./img/arrow.svg" alt="arrow">Wiehl</a></li>
                    <li><a href="./salzkotten.php"><img src="./img/arrow.svg" alt="arrow">Salzkotten</a></li>
                    <li><a href="./luedinghausen.php"><img src="./img/arrow.svg" alt="arrow">Lüdinghausen</a></li>
                    <li><a href="./espelkamp.php"><img src="./img/arrow.svg" alt="arrow">Espelkamp</a></li>
                    <li><a href="./warstein.php"><img src="./img/arrow.svg" alt="arrow">Warstein</a></li>
                    <li><a href="./attendorn.php"><img src="./img/arrow.svg" alt="arrow">Attendorn</a></li>
                    <li><a href="./bedburg.php"><img src="./img/arrow.svg" alt="arrow">Bedburg</a></li>
                    <li><a href="./juechen.php"><img src="./img/arrow.svg" alt="arrow">Jüchen</a></li>
                    <li><a href="./warburg.php"><img src="./img/arrow.svg" alt="arrow">Warburg</a></li>
                    <li><a href="./vreden.php"><img src="./img/arrow.svg" alt="arrow">Vreden</a></li>
                    <li><a href="./xanten.php"><img src="./img/arrow.svg" alt="arrow">Xanten</a></li>
                    <li><a href="./halle.php"><img src="./img/arrow.svg" alt="arrow">Halle</a></li>
                    <li><a href="./geseke.php"><img src="./img/arrow.svg" alt="arrow">Geseke</a></li>
                    <li><a href="./gees.php"><img src="./img/arrow.svg" alt="arrow">Rees</a></li>
                    <li><a href="./wuelfrath.php"><img src="./img/arrow.svg" alt="arrow">Wülfrath</a></li>
                    <li><a href="./steinhagen.php"><img src="./img/arrow.svg" alt="arrow">Steinhagen</a></li>
                    <li><a href="./wachtberg.php"><img src="./img/arrow.svg" alt="arrow">Wachtberg</a></li>
                    <li><a href="./meinerzhagen.php"><img src="./img/arrow.svg" alt="arrow">Meinerzhagen</a></li>
                    <li><a href="./zuelpich.php"><img src="./img/arrow.svg" alt="arrow">Zülpich</a></li>
                    <li><a href="./wilnsdorf.php"><img src="./img/arrow.svg" alt="arrow">Wilnsdorf</a></li>
                    <li><a href="./ennigerloh.php"><img src="./img/arrow.svg" alt="arrow">Ennigerloh</a></li>
                    <li><a href="./neunkirchen-Seelscheid.php"><img src="./img/arrow.svg" alt="arrow">Neunkirchen-Seelscheid</a></li>
                    <li><a href="./ochtrup.php"><img src="./img/arrow.svg" alt="arrow">Ochtrup</a></li>
                    <li><a href="./wenden.php"><img src="./img/arrow.svg" alt="arrow">Wenden</a></li>
                    <li><a href="./marsberg.php"><img src="./img/arrow.svg" alt="arrow">Marsberg</a></li>
                    <li><a href="./engelskirchen.php"><img src="./img/arrow.svg" alt="arrow">Engelskirchen</a></li>
                    <li><a href="./badDriburg.php"><img src="./img/arrow.svg" alt="arrow">Bad Driburg</a></li>
                    <li><a href="./eitorf.php"><img src="./img/arrow.svg" alt="arrow">Eitorf</a></li>
                    <li><a href="./windeck.php"><img src="./img/arrow.svg" alt="arrow">Windeck</a></li>
                    <li><a href="./wassenberg.php"><img src="./img/arrow.svg" alt="arrow">Wassenberg</a></li>
                    <li><a href="./vlotho.php"><img src="./img/arrow.svg" alt="arrow">Vlotho</a></li>
                    <li><a href="./boenen.php"><img src="./img/arrow.svg" alt="arrow">Bönen</a></li>
                    <li><a href="./werdohl.php"><img src="./img/arrow.svg" alt="arrow">Werdohl</a></li>
                    <li><a href="./kreuzau.php"><img src="./img/arrow.svg" alt="arrow">Kreuzau</a></li>
                    <li><a href="./horn-BadMeinberg.php"><img src="./img/arrow.svg" alt="arrow">Horn-Bad Meinberg</a></li>
                    <li><a href="./oerlinghausen.php"><img src="./img/arrow.svg" alt="arrow">Oerlinghausen</a></li>
                    <li><a href="./nuembrecht.php"><img src="./img/arrow.svg" alt="arrow">Nümbrecht</a></li>
                    <li><a href="./altena.php"><img src="./img/arrow.svg" alt="arrow">Altena</a></li>
                    <li><a href="./leopoldshoehe.php"><img src="./img/arrow.svg" alt="arrow">Leopoldshöhe</a></li>
                    <li><a href="./badLippspringe.php"><img src="./img/arrow.svg" alt="arrow">Bad Lippspringe</a></li>
                    <li><a href="./kierspe.php"><img src="./img/arrow.svg" alt="arrow">Kierspe</a></li>
                    <li><a href="./erwitte.php"><img src="./img/arrow.svg" alt="arrow">Erwitte</a></li>
                    <li><a href="./herzebrock-Clarholz.php"><img src="./img/arrow.svg" alt="arrow">Herzebrock-Clarholz</a></li>
                    <li><a href="./niederkruechten.php"><img src="./img/arrow.svg" alt="arrow">Niederkrüchten</a></li>
                    <li><a href="./ascheberg.php"><img src="./img/arrow.svg" alt="arrow">Ascheberg</a></li>
                    <li><a href="./rahden.php"><img src="./img/arrow.svg" alt="arrow">Rahden</a></li>
                    <li><a href="./blomberg.php"><img src="./img/arrow.svg" alt="arrow">Blomberg</a></li>
                    <li><a href="./hueckeswagen.php"><img src="./img/arrow.svg" alt="arrow">Hückeswagen</a></li>
                    <li><a href="./burbach.php"><img src="./img/arrow.svg" alt="arrow">Burbach</a></li>
                    <li><a href="./grefrath.php"><img src="./img/arrow.svg" alt="arrow">Grefrath</a></li>
                    <li><a href="./olsberg.php"><img src="./img/arrow.svg" alt="arrow">Olsberg</a></li>
                    <li><a href="./balderschwang.php"><img src="./img/arrow.svg" alt="arrow">Balderschwang</a></li>
                    <li><a href="./stadlern.php"><img src="./img/arrow.svg" alt="arrow">Stadlern</a></li>
                    <li><a href="./perasdorf.php"><img src="./img/arrow.svg" alt="arrow">Perasdorf</a></li>
                    <li><a href="./forheim.php"><img src="./img/arrow.svg" alt="arrow">Forheim</a></li>
                    <li><a href="./herbstadt.php"><img src="./img/arrow.svg" alt="arrow">Herbstadt</a></li>
                    <li><a href="./schwaigen.php"><img src="./img/arrow.svg" alt="arrow">Schwaigen</a></li>
                    <li><a href="./loitzendorf.php"><img src="./img/arrow.svg" alt="arrow">Loitzendorf</a></li>
                    <li><a href="./ohrenbach.php"><img src="./img/arrow.svg" alt="arrow">Ohrenbach</a></li>
                    <li><a href="./wattendorf.php"><img src="./img/arrow.svg" alt="arrow">Wattendorf</a></li>
                    <li><a href="./roegling.php"><img src="./img/arrow.svg" alt="arrow">Roegling</a></li>
                    <li><a href="./jettenbach.php"><img src="./img/arrow.svg" alt="arrow">Jettenbach</a></li>
                </ul>
            </div>
        </div>
    </section>
<?php
require_once('./payment.php');
require_once('./footer.php');
?>